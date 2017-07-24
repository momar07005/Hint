<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_dbbdcb08abcafa7517aa825001ba5fc40feb09b1d154676a8e2e61d951b71e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7acf4e529bcf633f866f547aa426e43519fda51f64f688a1b92e8a7295102a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7acf4e529bcf633f866f547aa426e43519fda51f64f688a1b92e8a7295102a2d->enter($__internal_7acf4e529bcf633f866f547aa426e43519fda51f64f688a1b92e8a7295102a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_f48a363db02e38321deafd0925fce9fb9ea09a041cda6ba7c8f1085f1cfcac3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48a363db02e38321deafd0925fce9fb9ea09a041cda6ba7c8f1085f1cfcac3d->enter($__internal_f48a363db02e38321deafd0925fce9fb9ea09a041cda6ba7c8f1085f1cfcac3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7acf4e529bcf633f866f547aa426e43519fda51f64f688a1b92e8a7295102a2d->leave($__internal_7acf4e529bcf633f866f547aa426e43519fda51f64f688a1b92e8a7295102a2d_prof);

        
        $__internal_f48a363db02e38321deafd0925fce9fb9ea09a041cda6ba7c8f1085f1cfcac3d->leave($__internal_f48a363db02e38321deafd0925fce9fb9ea09a041cda6ba7c8f1085f1cfcac3d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bde7b04b5178257a490e0d2849e0945d935a93f6067eaa0ed7777d03104b1c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde7b04b5178257a490e0d2849e0945d935a93f6067eaa0ed7777d03104b1c7d->enter($__internal_bde7b04b5178257a490e0d2849e0945d935a93f6067eaa0ed7777d03104b1c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_203954e618f9790c0b03326fc9da5217b603fc8a556df595e2a5b3e67dc09214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203954e618f9790c0b03326fc9da5217b603fc8a556df595e2a5b3e67dc09214->enter($__internal_203954e618f9790c0b03326fc9da5217b603fc8a556df595e2a5b3e67dc09214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t<div class=\"row under-header\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"title\">Se connecter</h1>
\t\t</div>
\t</div>
    ";
        // line 9
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    <script>
        \$(function() {
            \$('.login').hide();
        });
    </script>
";
        
        $__internal_203954e618f9790c0b03326fc9da5217b603fc8a556df595e2a5b3e67dc09214->leave($__internal_203954e618f9790c0b03326fc9da5217b603fc8a556df595e2a5b3e67dc09214_prof);

        
        $__internal_bde7b04b5178257a490e0d2849e0945d935a93f6067eaa0ed7777d03104b1c7d->leave($__internal_bde7b04b5178257a490e0d2849e0945d935a93f6067eaa0ed7777d03104b1c7d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
\t<div class=\"row under-header\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"title\">Se connecter</h1>
\t\t</div>
\t</div>
    {{ include('@FOSUser/Security/login_content.html.twig') }}
    <script>
        \$(function() {
            \$('.login').hide();
        });
    </script>
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
