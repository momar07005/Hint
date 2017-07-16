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
        $__internal_75b8fc6a8461619cce3cea630b711efadf9c1e61e376ecc1239fe33937e69b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b8fc6a8461619cce3cea630b711efadf9c1e61e376ecc1239fe33937e69b4a->enter($__internal_75b8fc6a8461619cce3cea630b711efadf9c1e61e376ecc1239fe33937e69b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_35a777b1c17dc48f93bed36b39bc258e6d24246f185c478290c2814938479b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a777b1c17dc48f93bed36b39bc258e6d24246f185c478290c2814938479b7c->enter($__internal_35a777b1c17dc48f93bed36b39bc258e6d24246f185c478290c2814938479b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fichiers_css/headerFooter.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fichiers_css/body.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    </head>
    <body>
 \t\t<div>
            <!-- si l'utilisateur ne s'est pas connecté, on lui demande-->
            ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 18
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
                <!-- s'il est conecté tout ce qui vera sera dans ce block -->
                ";
            // line 23
            $this->displayBlock('connected', $context, $blocks);
            // line 25
            echo "            ";
        } else {
            // line 26
            echo "                <!-- s'il n'es pas connecté, on lui demande de se loguer -->
                <a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                <!-- il a aussi la possibilté de voir ce qui se trouvent dans le block suivant 
                    quand il n'est pas connecté
                -->
                ";
            // line 31
            $this->displayBlock('notConnected', $context, $blocks);
            // line 33
            echo "            ";
        }
        // line 34
        echo "        </div>
        
        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_75b8fc6a8461619cce3cea630b711efadf9c1e61e376ecc1239fe33937e69b4a->leave($__internal_75b8fc6a8461619cce3cea630b711efadf9c1e61e376ecc1239fe33937e69b4a_prof);

        
        $__internal_35a777b1c17dc48f93bed36b39bc258e6d24246f185c478290c2814938479b7c->leave($__internal_35a777b1c17dc48f93bed36b39bc258e6d24246f185c478290c2814938479b7c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c070328623027d69e2784eb64b13c95b383ead6930abddd14ff562e63bc739fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c070328623027d69e2784eb64b13c95b383ead6930abddd14ff562e63bc739fe->enter($__internal_c070328623027d69e2784eb64b13c95b383ead6930abddd14ff562e63bc739fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27f99f28ce56686be191e674ba2c7f13192ed05d0dfcb9cd2e493396d1c494a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f99f28ce56686be191e674ba2c7f13192ed05d0dfcb9cd2e493396d1c494a8->enter($__internal_27f99f28ce56686be191e674ba2c7f13192ed05d0dfcb9cd2e493396d1c494a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hint";
        
        $__internal_27f99f28ce56686be191e674ba2c7f13192ed05d0dfcb9cd2e493396d1c494a8->leave($__internal_27f99f28ce56686be191e674ba2c7f13192ed05d0dfcb9cd2e493396d1c494a8_prof);

        
        $__internal_c070328623027d69e2784eb64b13c95b383ead6930abddd14ff562e63bc739fe->leave($__internal_c070328623027d69e2784eb64b13c95b383ead6930abddd14ff562e63bc739fe_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e2266880103b461ceb011cd080870703669ed62d1b9b478a7df35a9fb2c17825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2266880103b461ceb011cd080870703669ed62d1b9b478a7df35a9fb2c17825->enter($__internal_e2266880103b461ceb011cd080870703669ed62d1b9b478a7df35a9fb2c17825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7faf9177c2cb520a80e6e3b6f6475753e779ba7c8b083f6ae8d7e87fe2758585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7faf9177c2cb520a80e6e3b6f6475753e779ba7c8b083f6ae8d7e87fe2758585->enter($__internal_7faf9177c2cb520a80e6e3b6f6475753e779ba7c8b083f6ae8d7e87fe2758585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7faf9177c2cb520a80e6e3b6f6475753e779ba7c8b083f6ae8d7e87fe2758585->leave($__internal_7faf9177c2cb520a80e6e3b6f6475753e779ba7c8b083f6ae8d7e87fe2758585_prof);

        
        $__internal_e2266880103b461ceb011cd080870703669ed62d1b9b478a7df35a9fb2c17825->leave($__internal_e2266880103b461ceb011cd080870703669ed62d1b9b478a7df35a9fb2c17825_prof);

    }

    // line 23
    public function block_connected($context, array $blocks = array())
    {
        $__internal_080fc7fe8709afd8f0b1e92b510532fa08e078f67af6593c2316b8b11026a765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080fc7fe8709afd8f0b1e92b510532fa08e078f67af6593c2316b8b11026a765->enter($__internal_080fc7fe8709afd8f0b1e92b510532fa08e078f67af6593c2316b8b11026a765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connected"));

        $__internal_9e22caf083374364418002f8d6fea140c4284459e4d7b6503ea2e8bbfb127936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e22caf083374364418002f8d6fea140c4284459e4d7b6503ea2e8bbfb127936->enter($__internal_9e22caf083374364418002f8d6fea140c4284459e4d7b6503ea2e8bbfb127936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "connected"));

        echo "   
                ";
        
        $__internal_9e22caf083374364418002f8d6fea140c4284459e4d7b6503ea2e8bbfb127936->leave($__internal_9e22caf083374364418002f8d6fea140c4284459e4d7b6503ea2e8bbfb127936_prof);

        
        $__internal_080fc7fe8709afd8f0b1e92b510532fa08e078f67af6593c2316b8b11026a765->leave($__internal_080fc7fe8709afd8f0b1e92b510532fa08e078f67af6593c2316b8b11026a765_prof);

    }

    // line 31
    public function block_notConnected($context, array $blocks = array())
    {
        $__internal_058cdd1b58a3e2d2730873448527e4b234be8e005c522048bd1c4e79ff3234b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_058cdd1b58a3e2d2730873448527e4b234be8e005c522048bd1c4e79ff3234b4->enter($__internal_058cdd1b58a3e2d2730873448527e4b234be8e005c522048bd1c4e79ff3234b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notConnected"));

        $__internal_0eaed8cdd5e7386846f8bcc624d243517f57d76e69fceef202981b5e9033ab18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eaed8cdd5e7386846f8bcc624d243517f57d76e69fceef202981b5e9033ab18->enter($__internal_0eaed8cdd5e7386846f8bcc624d243517f57d76e69fceef202981b5e9033ab18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notConnected"));

        echo "   
                ";
        
        $__internal_0eaed8cdd5e7386846f8bcc624d243517f57d76e69fceef202981b5e9033ab18->leave($__internal_0eaed8cdd5e7386846f8bcc624d243517f57d76e69fceef202981b5e9033ab18_prof);

        
        $__internal_058cdd1b58a3e2d2730873448527e4b234be8e005c522048bd1c4e79ff3234b4->leave($__internal_058cdd1b58a3e2d2730873448527e4b234be8e005c522048bd1c4e79ff3234b4_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c8dc0d32168cf1d933515b55d62d263b199af70f73999c59c9dae21bbc8621c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c8dc0d32168cf1d933515b55d62d263b199af70f73999c59c9dae21bbc8621c->enter($__internal_5c8dc0d32168cf1d933515b55d62d263b199af70f73999c59c9dae21bbc8621c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74ebdbeac5d9bb68f45a12d682244d9f67126b1f9d86f5e442d6487ff0827c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ebdbeac5d9bb68f45a12d682244d9f67126b1f9d86f5e442d6487ff0827c4d->enter($__internal_74ebdbeac5d9bb68f45a12d682244d9f67126b1f9d86f5e442d6487ff0827c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_74ebdbeac5d9bb68f45a12d682244d9f67126b1f9d86f5e442d6487ff0827c4d->leave($__internal_74ebdbeac5d9bb68f45a12d682244d9f67126b1f9d86f5e442d6487ff0827c4d_prof);

        
        $__internal_5c8dc0d32168cf1d933515b55d62d263b199af70f73999c59c9dae21bbc8621c->leave($__internal_5c8dc0d32168cf1d933515b55d62d263b199af70f73999c59c9dae21bbc8621c_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e080b0d6c0db7457a83e78587450850b4b312c43acab0111670d57b5bd0284e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e080b0d6c0db7457a83e78587450850b4b312c43acab0111670d57b5bd0284e2->enter($__internal_e080b0d6c0db7457a83e78587450850b4b312c43acab0111670d57b5bd0284e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e62527a3d62e4d655fdd7114a083d9ee8afdd0841cf848bd1373eecf3e864a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62527a3d62e4d655fdd7114a083d9ee8afdd0841cf848bd1373eecf3e864a40->enter($__internal_e62527a3d62e4d655fdd7114a083d9ee8afdd0841cf848bd1373eecf3e864a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e62527a3d62e4d655fdd7114a083d9ee8afdd0841cf848bd1373eecf3e864a40->leave($__internal_e62527a3d62e4d655fdd7114a083d9ee8afdd0841cf848bd1373eecf3e864a40_prof);

        
        $__internal_e080b0d6c0db7457a83e78587450850b4b312c43acab0111670d57b5bd0284e2->leave($__internal_e080b0d6c0db7457a83e78587450850b4b312c43acab0111670d57b5bd0284e2_prof);

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
        return array (  220 => 37,  203 => 36,  184 => 31,  165 => 23,  148 => 8,  130 => 7,  116 => 39,  111 => 38,  108 => 37,  106 => 36,  102 => 34,  99 => 33,  97 => 31,  88 => 27,  85 => 26,  82 => 25,  80 => 23,  74 => 20,  70 => 19,  65 => 18,  63 => 17,  54 => 11,  50 => 10,  45 => 9,  43 => 8,  39 => 7,  31 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('fichiers_css/headerFooter.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('fichiers_css/body.css') }}\"/>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
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
