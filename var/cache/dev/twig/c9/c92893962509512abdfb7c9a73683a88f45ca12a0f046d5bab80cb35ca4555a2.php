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
        $__internal_0fd1a5580a18f89a7ca8c119a987f19894fde364006f668e7c98a6fd7e044867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd1a5580a18f89a7ca8c119a987f19894fde364006f668e7c98a6fd7e044867->enter($__internal_0fd1a5580a18f89a7ca8c119a987f19894fde364006f668e7c98a6fd7e044867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_57f80db5583a9d9d8d6a9ec058fe518d787622bc43eae73fb550a3aca3649853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f80db5583a9d9d8d6a9ec058fe518d787622bc43eae73fb550a3aca3649853->enter($__internal_57f80db5583a9d9d8d6a9ec058fe518d787622bc43eae73fb550a3aca3649853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fd1a5580a18f89a7ca8c119a987f19894fde364006f668e7c98a6fd7e044867->leave($__internal_0fd1a5580a18f89a7ca8c119a987f19894fde364006f668e7c98a6fd7e044867_prof);

        
        $__internal_57f80db5583a9d9d8d6a9ec058fe518d787622bc43eae73fb550a3aca3649853->leave($__internal_57f80db5583a9d9d8d6a9ec058fe518d787622bc43eae73fb550a3aca3649853_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb032c2544de6ba709f5ad6c16cba84b87335124afaca471f9a87f6a965a15b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb032c2544de6ba709f5ad6c16cba84b87335124afaca471f9a87f6a965a15b2->enter($__internal_cb032c2544de6ba709f5ad6c16cba84b87335124afaca471f9a87f6a965a15b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ab66cf04eb498c73efc5f8ad9826c60139356396cd8923fe1d741f3e5a18b5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab66cf04eb498c73efc5f8ad9826c60139356396cd8923fe1d741f3e5a18b5d1->enter($__internal_ab66cf04eb498c73efc5f8ad9826c60139356396cd8923fe1d741f3e5a18b5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ab66cf04eb498c73efc5f8ad9826c60139356396cd8923fe1d741f3e5a18b5d1->leave($__internal_ab66cf04eb498c73efc5f8ad9826c60139356396cd8923fe1d741f3e5a18b5d1_prof);

        
        $__internal_cb032c2544de6ba709f5ad6c16cba84b87335124afaca471f9a87f6a965a15b2->leave($__internal_cb032c2544de6ba709f5ad6c16cba84b87335124afaca471f9a87f6a965a15b2_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
