<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_233bc30afc42219a9240333166f04a0ba4bb96b62e43c2fdde6fc8bf43ef07b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_5b6ada6b304654069dca3ec04f45a661ebd823eca4a945788b41e3b39291727e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6ada6b304654069dca3ec04f45a661ebd823eca4a945788b41e3b39291727e->enter($__internal_5b6ada6b304654069dca3ec04f45a661ebd823eca4a945788b41e3b39291727e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_387575ba105f0247157a61075d1a2e4f9263c3cfb15c871134b99e44a8f98466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387575ba105f0247157a61075d1a2e4f9263c3cfb15c871134b99e44a8f98466->enter($__internal_387575ba105f0247157a61075d1a2e4f9263c3cfb15c871134b99e44a8f98466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b6ada6b304654069dca3ec04f45a661ebd823eca4a945788b41e3b39291727e->leave($__internal_5b6ada6b304654069dca3ec04f45a661ebd823eca4a945788b41e3b39291727e_prof);

        
        $__internal_387575ba105f0247157a61075d1a2e4f9263c3cfb15c871134b99e44a8f98466->leave($__internal_387575ba105f0247157a61075d1a2e4f9263c3cfb15c871134b99e44a8f98466_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e0e6182aea0da577e60d1affd36a5d30833a0043a962efcf654a10a00de7fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0e6182aea0da577e60d1affd36a5d30833a0043a962efcf654a10a00de7fcd->enter($__internal_7e0e6182aea0da577e60d1affd36a5d30833a0043a962efcf654a10a00de7fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_53a24dfee0610cdb0ce9dbd87ff9b76e3aaad4529c400dae6d8c71fc8ca7ff76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a24dfee0610cdb0ce9dbd87ff9b76e3aaad4529c400dae6d8c71fc8ca7ff76->enter($__internal_53a24dfee0610cdb0ce9dbd87ff9b76e3aaad4529c400dae6d8c71fc8ca7ff76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        // line 5
        echo "\t<script>
\t    \$(function() {
\t        \$('.register').hide();
\t    });
\t </script>
";
        
        $__internal_53a24dfee0610cdb0ce9dbd87ff9b76e3aaad4529c400dae6d8c71fc8ca7ff76->leave($__internal_53a24dfee0610cdb0ce9dbd87ff9b76e3aaad4529c400dae6d8c71fc8ca7ff76_prof);

        
        $__internal_7e0e6182aea0da577e60d1affd36a5d30833a0043a962efcf654a10a00de7fcd->leave($__internal_7e0e6182aea0da577e60d1affd36a5d30833a0043a962efcf654a10a00de7fcd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
\t{% include \"@FOSUser/Registration/register_content.html.twig\" %}
\t<script>
\t    \$(function() {
\t        \$('.register').hide();
\t    });
\t </script>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
