<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_63a78e45f285da395fc8a9af3344dd24563c7e334e44e148df4828b03e0f05ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_6c2f4635295ecb57d2e9c6b4a52e9fef3543f87752e05d008a5284f25e730cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2f4635295ecb57d2e9c6b4a52e9fef3543f87752e05d008a5284f25e730cd0->enter($__internal_6c2f4635295ecb57d2e9c6b4a52e9fef3543f87752e05d008a5284f25e730cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_c1b4a9d3a7c4a82ff25cda50de1371fa4d67e6bdab274da890df48982f0343cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b4a9d3a7c4a82ff25cda50de1371fa4d67e6bdab274da890df48982f0343cc->enter($__internal_c1b4a9d3a7c4a82ff25cda50de1371fa4d67e6bdab274da890df48982f0343cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c2f4635295ecb57d2e9c6b4a52e9fef3543f87752e05d008a5284f25e730cd0->leave($__internal_6c2f4635295ecb57d2e9c6b4a52e9fef3543f87752e05d008a5284f25e730cd0_prof);

        
        $__internal_c1b4a9d3a7c4a82ff25cda50de1371fa4d67e6bdab274da890df48982f0343cc->leave($__internal_c1b4a9d3a7c4a82ff25cda50de1371fa4d67e6bdab274da890df48982f0343cc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f251138c54d43d1f53899de7d15b5fbea3e27fc7f447cd2657b75b9f99c6d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f251138c54d43d1f53899de7d15b5fbea3e27fc7f447cd2657b75b9f99c6d41->enter($__internal_3f251138c54d43d1f53899de7d15b5fbea3e27fc7f447cd2657b75b9f99c6d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_256adc30282602cfd4c97fb167de1fc0105b99bd9e262d8e19cb598d96d26256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256adc30282602cfd4c97fb167de1fc0105b99bd9e262d8e19cb598d96d26256->enter($__internal_256adc30282602cfd4c97fb167de1fc0105b99bd9e262d8e19cb598d96d26256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_256adc30282602cfd4c97fb167de1fc0105b99bd9e262d8e19cb598d96d26256->leave($__internal_256adc30282602cfd4c97fb167de1fc0105b99bd9e262d8e19cb598d96d26256_prof);

        
        $__internal_3f251138c54d43d1f53899de7d15b5fbea3e27fc7f447cd2657b75b9f99c6d41->leave($__internal_3f251138c54d43d1f53899de7d15b5fbea3e27fc7f447cd2657b75b9f99c6d41_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
