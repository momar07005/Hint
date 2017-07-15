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
        $__internal_3fc2ad6f363a2558666cf3e00a454c7374c8c9ab38bcca06e2cf03d1dd6c9df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc2ad6f363a2558666cf3e00a454c7374c8c9ab38bcca06e2cf03d1dd6c9df5->enter($__internal_3fc2ad6f363a2558666cf3e00a454c7374c8c9ab38bcca06e2cf03d1dd6c9df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_852c83f09f63be2b01ef43b3ec10ba9150ee08a561f9bee61903c643fb568af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852c83f09f63be2b01ef43b3ec10ba9150ee08a561f9bee61903c643fb568af1->enter($__internal_852c83f09f63be2b01ef43b3ec10ba9150ee08a561f9bee61903c643fb568af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fc2ad6f363a2558666cf3e00a454c7374c8c9ab38bcca06e2cf03d1dd6c9df5->leave($__internal_3fc2ad6f363a2558666cf3e00a454c7374c8c9ab38bcca06e2cf03d1dd6c9df5_prof);

        
        $__internal_852c83f09f63be2b01ef43b3ec10ba9150ee08a561f9bee61903c643fb568af1->leave($__internal_852c83f09f63be2b01ef43b3ec10ba9150ee08a561f9bee61903c643fb568af1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df54ee38a8df01384d48171523d0617b37c2f737edca76e94812039e17cab781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df54ee38a8df01384d48171523d0617b37c2f737edca76e94812039e17cab781->enter($__internal_df54ee38a8df01384d48171523d0617b37c2f737edca76e94812039e17cab781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_55b8ecc131f9d30988aa875e0be9b93cbec3b60aa9d29a8c4d95678e9c61a23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b8ecc131f9d30988aa875e0be9b93cbec3b60aa9d29a8c4d95678e9c61a23e->enter($__internal_55b8ecc131f9d30988aa875e0be9b93cbec3b60aa9d29a8c4d95678e9c61a23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_55b8ecc131f9d30988aa875e0be9b93cbec3b60aa9d29a8c4d95678e9c61a23e->leave($__internal_55b8ecc131f9d30988aa875e0be9b93cbec3b60aa9d29a8c4d95678e9c61a23e_prof);

        
        $__internal_df54ee38a8df01384d48171523d0617b37c2f737edca76e94812039e17cab781->leave($__internal_df54ee38a8df01384d48171523d0617b37c2f737edca76e94812039e17cab781_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
