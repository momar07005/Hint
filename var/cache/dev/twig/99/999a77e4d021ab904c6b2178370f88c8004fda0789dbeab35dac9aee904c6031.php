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
        $__internal_832af24297cffa2933dd26cb2b9ae33ed5929c83c3108f792c30a52d4c3dbc54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_832af24297cffa2933dd26cb2b9ae33ed5929c83c3108f792c30a52d4c3dbc54->enter($__internal_832af24297cffa2933dd26cb2b9ae33ed5929c83c3108f792c30a52d4c3dbc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_a8c794229fbde154646eea292c9fbe7ee93f56d410e51472f91f0fa7bfe83e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c794229fbde154646eea292c9fbe7ee93f56d410e51472f91f0fa7bfe83e28->enter($__internal_a8c794229fbde154646eea292c9fbe7ee93f56d410e51472f91f0fa7bfe83e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_832af24297cffa2933dd26cb2b9ae33ed5929c83c3108f792c30a52d4c3dbc54->leave($__internal_832af24297cffa2933dd26cb2b9ae33ed5929c83c3108f792c30a52d4c3dbc54_prof);

        
        $__internal_a8c794229fbde154646eea292c9fbe7ee93f56d410e51472f91f0fa7bfe83e28->leave($__internal_a8c794229fbde154646eea292c9fbe7ee93f56d410e51472f91f0fa7bfe83e28_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66a68526096e084b0a1538bb8cd13e345a4a96622af9e7f407efd3b340c6071a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a68526096e084b0a1538bb8cd13e345a4a96622af9e7f407efd3b340c6071a->enter($__internal_66a68526096e084b0a1538bb8cd13e345a4a96622af9e7f407efd3b340c6071a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9283682629f6976749334ad214e0159008973ccd08fd88b801c1a1b77924f4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9283682629f6976749334ad214e0159008973ccd08fd88b801c1a1b77924f4f0->enter($__internal_9283682629f6976749334ad214e0159008973ccd08fd88b801c1a1b77924f4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_9283682629f6976749334ad214e0159008973ccd08fd88b801c1a1b77924f4f0->leave($__internal_9283682629f6976749334ad214e0159008973ccd08fd88b801c1a1b77924f4f0_prof);

        
        $__internal_66a68526096e084b0a1538bb8cd13e345a4a96622af9e7f407efd3b340c6071a->leave($__internal_66a68526096e084b0a1538bb8cd13e345a4a96622af9e7f407efd3b340c6071a_prof);

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
", "FOSUserBundle:Profile:show.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
