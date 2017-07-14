<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e4dbd497deb6193d31ca6c58354dfc01ec7cfb49cfc91bf552561bd8b69f7447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_871aacc8cebd22e6e48488c3e8ab65873b8df01c75de4fca7c5500bbad91b101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871aacc8cebd22e6e48488c3e8ab65873b8df01c75de4fca7c5500bbad91b101->enter($__internal_871aacc8cebd22e6e48488c3e8ab65873b8df01c75de4fca7c5500bbad91b101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_428e887df06144568dabe75b644686383dbad87bf0079a35a7559f067c28a862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428e887df06144568dabe75b644686383dbad87bf0079a35a7559f067c28a862->enter($__internal_428e887df06144568dabe75b644686383dbad87bf0079a35a7559f067c28a862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_871aacc8cebd22e6e48488c3e8ab65873b8df01c75de4fca7c5500bbad91b101->leave($__internal_871aacc8cebd22e6e48488c3e8ab65873b8df01c75de4fca7c5500bbad91b101_prof);

        
        $__internal_428e887df06144568dabe75b644686383dbad87bf0079a35a7559f067c28a862->leave($__internal_428e887df06144568dabe75b644686383dbad87bf0079a35a7559f067c28a862_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d1b984522c099666a37e3a3ff016aa8f551b82601090477c3b5ffcf49851663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1b984522c099666a37e3a3ff016aa8f551b82601090477c3b5ffcf49851663->enter($__internal_4d1b984522c099666a37e3a3ff016aa8f551b82601090477c3b5ffcf49851663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_29ce6984d55f4f4353f0211a500be6fb24b0817da387aa83810f29d8a5547b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ce6984d55f4f4353f0211a500be6fb24b0817da387aa83810f29d8a5547b02->enter($__internal_29ce6984d55f4f4353f0211a500be6fb24b0817da387aa83810f29d8a5547b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_29ce6984d55f4f4353f0211a500be6fb24b0817da387aa83810f29d8a5547b02->leave($__internal_29ce6984d55f4f4353f0211a500be6fb24b0817da387aa83810f29d8a5547b02_prof);

        
        $__internal_4d1b984522c099666a37e3a3ff016aa8f551b82601090477c3b5ffcf49851663->leave($__internal_4d1b984522c099666a37e3a3ff016aa8f551b82601090477c3b5ffcf49851663_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
