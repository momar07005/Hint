<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_233bc30afc42219a9240333166f04a0ba4bb96b62e43c2fdde6fc8bf43ef07b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_13cfc75dda016cd5b5f857c4266d61c1599b6c5b5b3f35e620d75f8ca84740ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13cfc75dda016cd5b5f857c4266d61c1599b6c5b5b3f35e620d75f8ca84740ce->enter($__internal_13cfc75dda016cd5b5f857c4266d61c1599b6c5b5b3f35e620d75f8ca84740ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_f6665de6af5bb9bf9b4c9df1b42b837395be9fe4cbfa8f15ab240985615bd9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6665de6af5bb9bf9b4c9df1b42b837395be9fe4cbfa8f15ab240985615bd9c4->enter($__internal_f6665de6af5bb9bf9b4c9df1b42b837395be9fe4cbfa8f15ab240985615bd9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13cfc75dda016cd5b5f857c4266d61c1599b6c5b5b3f35e620d75f8ca84740ce->leave($__internal_13cfc75dda016cd5b5f857c4266d61c1599b6c5b5b3f35e620d75f8ca84740ce_prof);

        
        $__internal_f6665de6af5bb9bf9b4c9df1b42b837395be9fe4cbfa8f15ab240985615bd9c4->leave($__internal_f6665de6af5bb9bf9b4c9df1b42b837395be9fe4cbfa8f15ab240985615bd9c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47a92b3df8021bf34e196d0053c67d3c1d851d733967456631f30dbab9b264e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a92b3df8021bf34e196d0053c67d3c1d851d733967456631f30dbab9b264e1->enter($__internal_47a92b3df8021bf34e196d0053c67d3c1d851d733967456631f30dbab9b264e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_31a01c9fc2200dc811eb68bec63d615555a434821031042609b2800b92668e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a01c9fc2200dc811eb68bec63d615555a434821031042609b2800b92668e9d->enter($__internal_31a01c9fc2200dc811eb68bec63d615555a434821031042609b2800b92668e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        // line 5
        echo "\t<script>
\t    \$(function() {
\t        \$('.register').hide();
\t    });
\t </script>
";
        
        $__internal_31a01c9fc2200dc811eb68bec63d615555a434821031042609b2800b92668e9d->leave($__internal_31a01c9fc2200dc811eb68bec63d615555a434821031042609b2800b92668e9d_prof);

        
        $__internal_47a92b3df8021bf34e196d0053c67d3c1d851d733967456631f30dbab9b264e1->leave($__internal_47a92b3df8021bf34e196d0053c67d3c1d851d733967456631f30dbab9b264e1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
