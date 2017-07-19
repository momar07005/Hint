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
        $__internal_daceb7ebec2d7ee8ec6025d096cdaebd512bb1f02137dc6c19ece02193d49db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daceb7ebec2d7ee8ec6025d096cdaebd512bb1f02137dc6c19ece02193d49db5->enter($__internal_daceb7ebec2d7ee8ec6025d096cdaebd512bb1f02137dc6c19ece02193d49db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_768d49751a4a19d528c7b9eec65c955015bf00ba91e7257aa7cb1d6dfd1af634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768d49751a4a19d528c7b9eec65c955015bf00ba91e7257aa7cb1d6dfd1af634->enter($__internal_768d49751a4a19d528c7b9eec65c955015bf00ba91e7257aa7cb1d6dfd1af634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daceb7ebec2d7ee8ec6025d096cdaebd512bb1f02137dc6c19ece02193d49db5->leave($__internal_daceb7ebec2d7ee8ec6025d096cdaebd512bb1f02137dc6c19ece02193d49db5_prof);

        
        $__internal_768d49751a4a19d528c7b9eec65c955015bf00ba91e7257aa7cb1d6dfd1af634->leave($__internal_768d49751a4a19d528c7b9eec65c955015bf00ba91e7257aa7cb1d6dfd1af634_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b21c2b5d1da55a8b63c47748a432cde03747a6436731aab96e47f71ee73527f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21c2b5d1da55a8b63c47748a432cde03747a6436731aab96e47f71ee73527f0->enter($__internal_b21c2b5d1da55a8b63c47748a432cde03747a6436731aab96e47f71ee73527f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f92d42c21678dfbd28f4baa053a3b1a4983a09b6c9b9d6e008e7ad2aacea49e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f92d42c21678dfbd28f4baa053a3b1a4983a09b6c9b9d6e008e7ad2aacea49e->enter($__internal_1f92d42c21678dfbd28f4baa053a3b1a4983a09b6c9b9d6e008e7ad2aacea49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1f92d42c21678dfbd28f4baa053a3b1a4983a09b6c9b9d6e008e7ad2aacea49e->leave($__internal_1f92d42c21678dfbd28f4baa053a3b1a4983a09b6c9b9d6e008e7ad2aacea49e_prof);

        
        $__internal_b21c2b5d1da55a8b63c47748a432cde03747a6436731aab96e47f71ee73527f0->leave($__internal_b21c2b5d1da55a8b63c47748a432cde03747a6436731aab96e47f71ee73527f0_prof);

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
