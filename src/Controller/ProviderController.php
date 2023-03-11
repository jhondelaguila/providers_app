<?php
    namespace App\Controller;

    use App\Entity\Provider;
    use Doctrine\DBAL\DBALException;
    use PDOException;
    use Symfony\Component\Form\Extension\Core\Type\EmailType;
    use Symfony\Component\Form\Extension\Core\Type\TelType;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


    Class ProviderController extends Controller{
        /**
         * @Route("/", name="provider_list")
         * @Method ({"GET"})
         */
        public function index() {

            $providers = $this->getDoctrine()->getRepository(Provider::class)->findAll();

            return $this->render('provider/index.html.twig', array('providers' => $providers));
        }

        /**
         * @Route("/provider/active", name="active_provider_list")
         * @Method ({"GET"})
         */
        public function activeProviders() {
            $providers = $this->getDoctrine()->getRepository(Provider::class)->findBy(array('active'=>true));

            return $this->render('provider/active.html.twig', array('providers' => $providers));
        }

        /**
         * @Route("/provider/create", name="create_provider")
         * @Method ({"GET","POST"})
         */
        public function createProvider(Request $request){
            $provider = new Provider();

            $form = $this->createFormBuilder($provider)
                ->add('name',TextType::class, array(
                    'label' => 'Nombre',
                    'attr' => array(
                        'class' => 'form-control'
                    )))
                ->add('email',EmailType::class, array(
                    'label' => 'Email',
                    'attr' => array(
                        'class' => 'form-control'
                    )))
                ->add('phone',TelType::class, array(
                    'label' => 'Teléfono de contacto',
                    'attr' => array(
                        'class' => 'form-control'
                    )))
                ->add('type',ChoiceType::class, array(
                    'label' => 'Tipo de proveedor',
                    'placeholder' => 'Elige un tipo de proveedor',
                    'choices' => array(
                        'Hotel' => 'Hotel',
                        'Pista' => 'Pista',
                        'Complemento' => 'Complemento'
                    ),
                    'attr' => array(
                        'class' => 'form-control'
                    )))
                ->add('active',CheckboxType::class, array(
                    'label' => 'Activo',
                    'attr' => array(
                        'class' => 'form-control'
                    ),
                    'required' => false))
                ->add('save',SubmitType::class, array(
                    'label' => 'Crear',
                    'attr' => array('class' => 'btn btn-primary mt-3')))
                ->getForm();

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()) {
                $provider = $form->getData();
                $provider->setDate_Created(date("d/m/y H:i"));
                $provider->setLast_Update(date("d/m/y H:i"));
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($provider);
                try {
                    $entityManager->flush();
                } catch (DBALException $e) {
                    $this->addFlash('danger', 'No se pudo añadir el proveedor. Recuerda que el nombre, email y teléfono son únicos.');
                    return $this->redirectToRoute('create_provider');
                }

                return $this->redirectToRoute('provider_list');
            }

            return $this->render('provider/create.html.twig', array(
                'form' => $form->createView()
            ));
        }

        /**
         * @Route("/provider/edit/{id}", name="edit_provider")
         * @Method ({"POST"})
         */
        public function editProvider(Request $request, $id){
            $provider = new Provider();
            $provider = $this->getDoctrine()->getRepository(Provider::class)->find($id);

            $form = $this->createFormBuilder($provider)
                ->add('name',TextType::class, array('attr' => array(
                'label' => 'Nombre',
                'class' => 'form-control')))
                ->add('email',EmailType::class, array('attr' => array(
                    'label' => 'Correo electrónico',
                    'class' => 'form-control')))
                ->add('phone',TelType::class, array('attr' => array(
                    'label' => 'Teléfono de contacto',
                    'class' => 'form-control')))
                ->add('type',ChoiceType::class, array(
                    'label' => 'Tipo de proveedor',
                    'placeholder' => 'Elige un tipo de proveedor',
                    'choices' => array(
                        'Hotel' => 'Hotel',
                        'Pista' => 'Pista',
                        'Complemento' => 'Complemento'
                    ),
                    'attr' => array(
                        'class' => 'form-control'
                    )))
                ->add('active',CheckboxType::class, array('attr' => array(
                    'label' => 'Activo',
                    'class' => 'form-control'),
                    'required' => false))
                ->add('save',SubmitType::class, array(
                    'label' => 'Actualizar',
                    'attr' => array('class' => 'btn btn-primary mt-3')))
                ->getForm();

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()) {
                $provider->setLast_Update(date("d/m/y H:i"));
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->flush();

                return $this->redirectToRoute('provider_list');
            }

            return $this->render('provider/edit.html.twig', array(
                'form' => $form->createView()
            ));
        }

        /**
         * @Route("/provider/{id}", name="provider_show")
         * @Method ({"GET"})
         */
        public function showProvider($id){
            $provider = $this->getDoctrine()->getRepository(Provider::class)->find($id);
            return $this->render('provider/show.html.twig', array('provider' => $provider));
        }

        /**
         * @Route("/provider/delete/{id}")
         * @Method ({"DELETE"})
         */
        public function deleteProvider(Request $request, $id){
            $provider = $this->getDoctrine()->getRepository(Provider::class)->find($id);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($provider);
            $entityManager->flush();

            return $this->redirectToRoute('provider_list');
        }
    }