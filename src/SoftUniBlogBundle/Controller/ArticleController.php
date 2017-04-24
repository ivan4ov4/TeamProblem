<?php
namespace SoftUniBlogBundle\Controller;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use SoftUniBlogBundle\Entity\Article;
use SoftUniBlogBundle\Entity\Tag;
use SoftUniBlogBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class ArticleController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/article/create", name="article_create")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function create(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $tagsString = $request->get('tags');
            $tags = explode(",", $tagsString);
            $tagRepo = $this->getDoctrine()->getRepository(Tag::class);
            $tagsToSave = new ArrayCollection();
            foreach($tags as $tagName)
            {
                $tagName = trim($tagName);
                $tag = $tagRepo->findOneBy(['name' => $tagName]);
                if ($tag == null)
                {

                    $tag = new Tag();
                    $tag->setName($tagName);
                    $em->persist($tag);
                }
                $tagsToSave-> add($tag);
            }
            $article->setTags($tagsToSave);
           // var_dump($form);exit;
            $article->setAuthor($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
           // var_dump($article);exit;
            $em->flush();
            return $this->redirectToRoute('blog_index');
        }
        return $this->render('article/create.html.twig',
            array('form' => $form->createView()));
    }


    /**
     * @Route("/article/{id}", name="article_view")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewArticle($id)
    {
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);
        $user = $this->getUser();
        if($article == null){
            return $this -> redirectToRoute("blog_index");
        }
        return $this->render('article/article.html.twig', ['article' => $article, 'user' => $user]);
    }


    /**
     * @Route("/article/edit/{id}", name="article_edit")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editArticle($id, Request $request){

        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);

        if($article === null){
            return $this->redirectToRoute("blog_index");
        }

        $currentUser = $this->getUser();
        if(!$currentUser->isAuthor($article) && !$currentUser->isAdmin() && !$currentUser->isEditor()){
            return $this->redirectToRoute('blog_index');
        }

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if($form -> isSubmitted() && $form -> isValid()){

            $data = $this->getDoctrine()->getManager();
            $data->persist($article);
            $data->flush();

            return $this->redirectToRoute('article_view', [
                'id' => $article->getId()]
            );
        }

        return $this->render('article/edit.html.twig',[
            'article' => $article,
            'form' => $form->createView()]);
    }


    /**
     * @Route("/article/delete/{id}", name="article_delete")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     *
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function delete($id, Request $request)
    {
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);

        if ($article === null) {
            return $this->redirectToRoute("blog_index");
        }

        $currentUser = $this->getUser();

        if(!$currentUser->isAuthor($article) && !$currentUser->isAdmin()  && !$currentUser->isEditor()){
            return $this->redirectToRoute('blog_index');
        }

        $form = $this->createForm(ArticleType::class,$article);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();

            return $this->redirectToRoute('blog_index');
        }

        return $this->render('article/delete.html.twig', [
            'article' => $article,
            'form' => $form->createView()
        ]);
    }
}