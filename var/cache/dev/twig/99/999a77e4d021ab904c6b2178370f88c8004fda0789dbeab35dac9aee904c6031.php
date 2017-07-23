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
        $__internal_39807fe297d7d10f4ef485c75791e11dc46dcad4f5114f8f5557ffab3e4ac8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39807fe297d7d10f4ef485c75791e11dc46dcad4f5114f8f5557ffab3e4ac8c4->enter($__internal_39807fe297d7d10f4ef485c75791e11dc46dcad4f5114f8f5557ffab3e4ac8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_1894b048c423b632d688a2a51f038d4a139b397357a8baf5c4a9e6947cc9668d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1894b048c423b632d688a2a51f038d4a139b397357a8baf5c4a9e6947cc9668d->enter($__internal_1894b048c423b632d688a2a51f038d4a139b397357a8baf5c4a9e6947cc9668d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39807fe297d7d10f4ef485c75791e11dc46dcad4f5114f8f5557ffab3e4ac8c4->leave($__internal_39807fe297d7d10f4ef485c75791e11dc46dcad4f5114f8f5557ffab3e4ac8c4_prof);

        
        $__internal_1894b048c423b632d688a2a51f038d4a139b397357a8baf5c4a9e6947cc9668d->leave($__internal_1894b048c423b632d688a2a51f038d4a139b397357a8baf5c4a9e6947cc9668d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e119692ec7fae34cff04d3cc74f4cfb895c9e38e2bd745b2ac9d9d79b06ddea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e119692ec7fae34cff04d3cc74f4cfb895c9e38e2bd745b2ac9d9d79b06ddea->enter($__internal_3e119692ec7fae34cff04d3cc74f4cfb895c9e38e2bd745b2ac9d9d79b06ddea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3b58932b080a88734203791057de691bdecd9b1983cfb73b8ef73f2759ae2034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b58932b080a88734203791057de691bdecd9b1983cfb73b8ef73f2759ae2034->enter($__internal_3b58932b080a88734203791057de691bdecd9b1983cfb73b8ef73f2759ae2034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_3b58932b080a88734203791057de691bdecd9b1983cfb73b8ef73f2759ae2034->leave($__internal_3b58932b080a88734203791057de691bdecd9b1983cfb73b8ef73f2759ae2034_prof);

        
        $__internal_3e119692ec7fae34cff04d3cc74f4cfb895c9e38e2bd745b2ac9d9d79b06ddea->leave($__internal_3e119692ec7fae34cff04d3cc74f4cfb895c9e38e2bd745b2ac9d9d79b06ddea_prof);

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
