<?php

/* base.html.twig */
class __TwigTemplate_06e88f8920e195ff52c3ee4b326f0552ff44fa1027145e1ca853a7059736c332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'connected' => array($this, 'block_connected'),
            'notConnected' => array($this, 'block_notConnected'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df6f2f63f6b1452bbb69cabb085b5d604a88c1db97536e2fe7083d44e7eee956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6f2f63f6b1452bbb69cabb085b5d604a88c1db97536e2fe7083d44e7eee956->enter($__internal_df6f2f63f6b1452bbb69cabb085b5d604a88c1db97536e2fe7083d44e7eee956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_81d650302456e1156f4e56bfa84fcb645d40e8d7114ac0418411454093661d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d650302456e1156f4e56bfa84fcb645d40e8d7114ac0418411454093661d08->enter($__internal_81d650302456e1156f4e56bfa84fcb645d40e8d7114ac0418411454093661d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head lang=fr>
        <meta charset=\"UTF-8\" />
        <meta name=\"language\" content=\"en\">
        <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0\"/>
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    </head>
    <body>
 \t\t<div>
            <!-- si l'utilisateur ne s'est pas connecté, on lui demande-->
            ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
                <!-- s'il est conecté tout ce qui vera sera dans ce block -->
                ";
            // line 20
            $this->displayBlock('connected', $context, $blocks);
            // line 22
            echo "            ";
        } else {
            // line 23
            echo "                <!-- s'il n'es pas connecté, on lui demande de se loguer -->
                <a href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                <!-- il a aussi la possibilté de voir ce qui se trouvent dans le block suivant 
                    quand il n'est pas connecté
                -->
                ";
            // line 28
            $this->displayBlock('notConnected', $context, $blocks);
            // line 30
            echo "            ";
        }
        // line 31
        echo "        </div>
        
        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_df6f2f63f6b1452bbb69cabb085b5d604a88c1db97536e2fe7083d44e7eee956->leave($__internal_df6f2f63f6b1452bbb69cabb085b5d604a88c1db97536e2fe7083d44e7eee956_prof);

        
        $__internal_81d650302456e1156f4e56bfa84fcb645d40e8d7114ac0418411454093661d08->leave($__internal_81d650302456e1156f4e56bfa84fcb645d40e8d7114ac0418411454093661d08_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c781cc98e1fc4ef124d78a9a9b7f9bf32baff51ca7073f42113a04e594f2bc90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c781cc98e1fc4ef124d78a9a9b7f9bf32baff51ca7073f42113a04e594f2bc90->enter($__internal_c781cc98e1fc4ef124d78a9a9b7f9bf32baff51ca7073f42113a04e594f2bc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2bafeb39f2edd6b4753a5a9b47e8fbf6d94cd173ac67acbc7560f7fb85d8af39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bafeb39f2edd6b4753a5a9b47e8fbf6d94cd173ac67acbc7560f7fb85d8af39->enter($__internal_2bafeb39f2edd6b4753a5a9b47e8fbf6d94cd173ac67acbc7560f7fb85d8af39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hint";
        
        $__internal_2bafeb39f2edd6b4753a5a9b47e8fbf6d94cd173ac67acbc7560f7fb85d8af39->leave($__internal_2bafeb39f2edd6b4753a5a9b47e8fbf6d94cd173ac67acbc7560f7fb85d8af39_prof);

        
        $__internal_c781cc98e1fc4ef124d78a9a9b7f9bf32baff51ca7073f42113a04e594f2bc90->leave($__internal_c781cc98e1fc4ef124d78a9a9b7f9bf32baff51ca7073f42113a04e594f2bc90_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a8aff5b0f703a3c8354cc52d06ec738d05b678469ee62d47895b60c63a91eba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8aff5b0f703a3c8354cc52d06ec738d05b678469ee62d47895b60c63a91eba3->enter($__internal_a8aff5b0f703a3c8354cc52d06ec738d05b678469ee62d47895b60c63a91eba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8125099589b2a9627f7ecd117a417e3b77e61b072d32130c7a3264efcd804ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8125099589b2a9627f7ecd117a417e3b77e61b072d32130c7a3264efcd804ddc->enter($__internal_8125099589b2a9627f7ecd117a417e3b77e61b072d32130c7a3264efcd804ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8125099589b2a9627f7ecd117a417e3b77e61b072d32130c7a3264efcd804ddc->leave($__internal_8125099589b2a9627f7ecd117a417e3b77e61b072d32130c7a3264efcd804ddc_prof);

        
        $__internal_a8aff5b0f703a3c8354cc52d06ec738d05b678469ee62d47895b60c63a91eba3->leave($__internal_a8aff5b0f703a3c8354cc52d06ec738d05b678469ee62d47895b60c63a91eba3_prof);

    }

    // line 20
    public function block_connected($context, array $blocks = array())
    {
        $__internal_b6d669f93d4138d5e0ccf54d38d275cae3fd754b77aae381ad0659f97f019673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d669f93d4138d5e0ccf54d38d275cae3fd754b77aae381ad0659f97f019673->enter($__internal_b6d669f93d4138d5e0ccf54d38d275cae3fd754b77aae381ad0659f97f019673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connected"));

        $__internal_c012513ddb9da4487e6f85e57a1ba94ea56dbbc3ab2829aa50de9966a500f8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c012513ddb9da4487e6f85e57a1ba94ea56dbbc3ab2829aa50de9966a500f8ab->enter($__internal_c012513ddb9da4487e6f85e57a1ba94ea56dbbc3ab2829aa50de9966a500f8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connected"));

        echo "   
                ";
        
        $__internal_c012513ddb9da4487e6f85e57a1ba94ea56dbbc3ab2829aa50de9966a500f8ab->leave($__internal_c012513ddb9da4487e6f85e57a1ba94ea56dbbc3ab2829aa50de9966a500f8ab_prof);

        
        $__internal_b6d669f93d4138d5e0ccf54d38d275cae3fd754b77aae381ad0659f97f019673->leave($__internal_b6d669f93d4138d5e0ccf54d38d275cae3fd754b77aae381ad0659f97f019673_prof);

    }

    // line 28
    public function block_notConnected($context, array $blocks = array())
    {
        $__internal_808108a8d36a8a3b2f7e2a615d1aa328052f181455545d89737d4bbdba0b2f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808108a8d36a8a3b2f7e2a615d1aa328052f181455545d89737d4bbdba0b2f72->enter($__internal_808108a8d36a8a3b2f7e2a615d1aa328052f181455545d89737d4bbdba0b2f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notConnected"));

        $__internal_2930675f989c73e24547edab3879fdf3f73da0c8a8cf3f5932a4403c120ce6ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2930675f989c73e24547edab3879fdf3f73da0c8a8cf3f5932a4403c120ce6ab->enter($__internal_2930675f989c73e24547edab3879fdf3f73da0c8a8cf3f5932a4403c120ce6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notConnected"));

        echo "   
                ";
        
        $__internal_2930675f989c73e24547edab3879fdf3f73da0c8a8cf3f5932a4403c120ce6ab->leave($__internal_2930675f989c73e24547edab3879fdf3f73da0c8a8cf3f5932a4403c120ce6ab_prof);

        
        $__internal_808108a8d36a8a3b2f7e2a615d1aa328052f181455545d89737d4bbdba0b2f72->leave($__internal_808108a8d36a8a3b2f7e2a615d1aa328052f181455545d89737d4bbdba0b2f72_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee8a8b2a8e5d1074e97afe72eb1b15acfe458384ce3bc424a26e6bf1b5783210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8a8b2a8e5d1074e97afe72eb1b15acfe458384ce3bc424a26e6bf1b5783210->enter($__internal_ee8a8b2a8e5d1074e97afe72eb1b15acfe458384ce3bc424a26e6bf1b5783210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fbe3e24e96157fb9673e9f50de662932dd7d0fbc6101cdd612a30c34afd4c1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe3e24e96157fb9673e9f50de662932dd7d0fbc6101cdd612a30c34afd4c1a2->enter($__internal_fbe3e24e96157fb9673e9f50de662932dd7d0fbc6101cdd612a30c34afd4c1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fbe3e24e96157fb9673e9f50de662932dd7d0fbc6101cdd612a30c34afd4c1a2->leave($__internal_fbe3e24e96157fb9673e9f50de662932dd7d0fbc6101cdd612a30c34afd4c1a2_prof);

        
        $__internal_ee8a8b2a8e5d1074e97afe72eb1b15acfe458384ce3bc424a26e6bf1b5783210->leave($__internal_ee8a8b2a8e5d1074e97afe72eb1b15acfe458384ce3bc424a26e6bf1b5783210_prof);

    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d96a7e0f410c613425aebe5136994c9209e15b6f58d5ee31666674ed872f56c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96a7e0f410c613425aebe5136994c9209e15b6f58d5ee31666674ed872f56c1->enter($__internal_d96a7e0f410c613425aebe5136994c9209e15b6f58d5ee31666674ed872f56c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ac30ad4aa5161f95fb81d46d8d42bac80c9d6133290cae3342901909b21cbd4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac30ad4aa5161f95fb81d46d8d42bac80c9d6133290cae3342901909b21cbd4d->enter($__internal_ac30ad4aa5161f95fb81d46d8d42bac80c9d6133290cae3342901909b21cbd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ac30ad4aa5161f95fb81d46d8d42bac80c9d6133290cae3342901909b21cbd4d->leave($__internal_ac30ad4aa5161f95fb81d46d8d42bac80c9d6133290cae3342901909b21cbd4d_prof);

        
        $__internal_d96a7e0f410c613425aebe5136994c9209e15b6f58d5ee31666674ed872f56c1->leave($__internal_d96a7e0f410c613425aebe5136994c9209e15b6f58d5ee31666674ed872f56c1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 34,  194 => 33,  175 => 28,  156 => 20,  139 => 8,  121 => 7,  107 => 36,  102 => 35,  99 => 34,  97 => 33,  93 => 31,  90 => 30,  88 => 28,  79 => 24,  76 => 23,  73 => 22,  71 => 20,  65 => 17,  61 => 16,  56 => 15,  54 => 14,  45 => 9,  43 => 8,  39 => 7,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head lang=fr>
        <meta charset=\"UTF-8\" />
        <meta name=\"language\" content=\"en\">
        <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0\"/>
        <title>{% block title %}Hint{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"stylesheet\" type=\"text/css\"  href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\">
    </head>
    <body>
 \t\t<div>
            <!-- si l'utilisateur ne s'est pas connecté, on lui demande-->
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
                <!-- s'il est conecté tout ce qui vera sera dans ce block -->
                {% block connected %}   
                {% endblock %}
            {% else %}
                <!-- s'il n'es pas connecté, on lui demande de se loguer -->
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                <!-- il a aussi la possibilté de voir ce qui se trouvent dans le block suivant 
                    quand il n'est pas connecté
                -->
                {% block notConnected %}   
                {% endblock %}
            {% endif %}
        </div>
        
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}\"></script>
    </body>
</html>
", "base.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/views/base.html.twig");
    }
}
