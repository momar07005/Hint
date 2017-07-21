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
        $__internal_e0adae571f19e8163bb723afd9b7a74944bdf830970e4b5c3183dbd2bd359dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0adae571f19e8163bb723afd9b7a74944bdf830970e4b5c3183dbd2bd359dea->enter($__internal_e0adae571f19e8163bb723afd9b7a74944bdf830970e4b5c3183dbd2bd359dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_dd368ae76f7e8c9c12349d02bec8e3dd46e9eee673247fff5f173f2d2de17cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd368ae76f7e8c9c12349d02bec8e3dd46e9eee673247fff5f173f2d2de17cfb->enter($__internal_dd368ae76f7e8c9c12349d02bec8e3dd46e9eee673247fff5f173f2d2de17cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0adae571f19e8163bb723afd9b7a74944bdf830970e4b5c3183dbd2bd359dea->leave($__internal_e0adae571f19e8163bb723afd9b7a74944bdf830970e4b5c3183dbd2bd359dea_prof);

        
        $__internal_dd368ae76f7e8c9c12349d02bec8e3dd46e9eee673247fff5f173f2d2de17cfb->leave($__internal_dd368ae76f7e8c9c12349d02bec8e3dd46e9eee673247fff5f173f2d2de17cfb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87ba3b9477503fbc284507a41efa9d55a92e86eac84afa00ef4d51308bfd43c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ba3b9477503fbc284507a41efa9d55a92e86eac84afa00ef4d51308bfd43c6->enter($__internal_87ba3b9477503fbc284507a41efa9d55a92e86eac84afa00ef4d51308bfd43c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9dddd441bba82921d27e0c06841bcd77347a49b0c4a9f155f9acf49ab4881068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dddd441bba82921d27e0c06841bcd77347a49b0c4a9f155f9acf49ab4881068->enter($__internal_9dddd441bba82921d27e0c06841bcd77347a49b0c4a9f155f9acf49ab4881068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_9dddd441bba82921d27e0c06841bcd77347a49b0c4a9f155f9acf49ab4881068->leave($__internal_9dddd441bba82921d27e0c06841bcd77347a49b0c4a9f155f9acf49ab4881068_prof);

        
        $__internal_87ba3b9477503fbc284507a41efa9d55a92e86eac84afa00ef4d51308bfd43c6->leave($__internal_87ba3b9477503fbc284507a41efa9d55a92e86eac84afa00ef4d51308bfd43c6_prof);

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
