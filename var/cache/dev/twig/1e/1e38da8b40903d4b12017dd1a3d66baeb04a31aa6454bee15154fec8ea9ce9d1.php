<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_4d85921b64ffb363dbf6ceeeb5a682f3268837fb15c3d16a0fcb385b24c75c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_0f1bfcadf2272777d854eaa4c55ece354a9e8a08d114ab5dfe288ea5365a8676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1bfcadf2272777d854eaa4c55ece354a9e8a08d114ab5dfe288ea5365a8676->enter($__internal_0f1bfcadf2272777d854eaa4c55ece354a9e8a08d114ab5dfe288ea5365a8676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_35f6fe14f376b89b28ba1eb3371d56a4a04fe3896ce26c18cb4b062f02b8a9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f6fe14f376b89b28ba1eb3371d56a4a04fe3896ce26c18cb4b062f02b8a9be->enter($__internal_35f6fe14f376b89b28ba1eb3371d56a4a04fe3896ce26c18cb4b062f02b8a9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f1bfcadf2272777d854eaa4c55ece354a9e8a08d114ab5dfe288ea5365a8676->leave($__internal_0f1bfcadf2272777d854eaa4c55ece354a9e8a08d114ab5dfe288ea5365a8676_prof);

        
        $__internal_35f6fe14f376b89b28ba1eb3371d56a4a04fe3896ce26c18cb4b062f02b8a9be->leave($__internal_35f6fe14f376b89b28ba1eb3371d56a4a04fe3896ce26c18cb4b062f02b8a9be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_975c121398ab5fb7a47ba0cb2b47a654fa803549e612de3fdf7561418fc78697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975c121398ab5fb7a47ba0cb2b47a654fa803549e612de3fdf7561418fc78697->enter($__internal_975c121398ab5fb7a47ba0cb2b47a654fa803549e612de3fdf7561418fc78697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b5d8bb14ede4e9e6f589e6644764941eaf45641b5fa28e33a62f6eda6ee981c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d8bb14ede4e9e6f589e6644764941eaf45641b5fa28e33a62f6eda6ee981c4->enter($__internal_b5d8bb14ede4e9e6f589e6644764941eaf45641b5fa28e33a62f6eda6ee981c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b5d8bb14ede4e9e6f589e6644764941eaf45641b5fa28e33a62f6eda6ee981c4->leave($__internal_b5d8bb14ede4e9e6f589e6644764941eaf45641b5fa28e33a62f6eda6ee981c4_prof);

        
        $__internal_975c121398ab5fb7a47ba0cb2b47a654fa803549e612de3fdf7561418fc78697->leave($__internal_975c121398ab5fb7a47ba0cb2b47a654fa803549e612de3fdf7561418fc78697_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
