<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7687bb1c1c6aa511a4d6f4947d6fc43df0e4d28db4aa53199e73850c9ab26c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_df6ecbaf7e0abeac800046af0bcceedfc49ba032f318b29cf4b039e3a1b1b6fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6ecbaf7e0abeac800046af0bcceedfc49ba032f318b29cf4b039e3a1b1b6fb->enter($__internal_df6ecbaf7e0abeac800046af0bcceedfc49ba032f318b29cf4b039e3a1b1b6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_1f749e96459d80ba2a42a12ee1bc50e077c80a38b4f352a361ddc45519cb7aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f749e96459d80ba2a42a12ee1bc50e077c80a38b4f352a361ddc45519cb7aa3->enter($__internal_1f749e96459d80ba2a42a12ee1bc50e077c80a38b4f352a361ddc45519cb7aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df6ecbaf7e0abeac800046af0bcceedfc49ba032f318b29cf4b039e3a1b1b6fb->leave($__internal_df6ecbaf7e0abeac800046af0bcceedfc49ba032f318b29cf4b039e3a1b1b6fb_prof);

        
        $__internal_1f749e96459d80ba2a42a12ee1bc50e077c80a38b4f352a361ddc45519cb7aa3->leave($__internal_1f749e96459d80ba2a42a12ee1bc50e077c80a38b4f352a361ddc45519cb7aa3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f568f6c346394e32e84ce6d2313538ee0bd9e84c29c96a2741d7d9fa83c844b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f568f6c346394e32e84ce6d2313538ee0bd9e84c29c96a2741d7d9fa83c844b7->enter($__internal_f568f6c346394e32e84ce6d2313538ee0bd9e84c29c96a2741d7d9fa83c844b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1132ade5bfd5df3c034a874d6d6aac3e0b23d9229fa9374a77b818161debadd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1132ade5bfd5df3c034a874d6d6aac3e0b23d9229fa9374a77b818161debadd5->enter($__internal_1132ade5bfd5df3c034a874d6d6aac3e0b23d9229fa9374a77b818161debadd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_1132ade5bfd5df3c034a874d6d6aac3e0b23d9229fa9374a77b818161debadd5->leave($__internal_1132ade5bfd5df3c034a874d6d6aac3e0b23d9229fa9374a77b818161debadd5_prof);

        
        $__internal_f568f6c346394e32e84ce6d2313538ee0bd9e84c29c96a2741d7d9fa83c844b7->leave($__internal_f568f6c346394e32e84ce6d2313538ee0bd9e84c29c96a2741d7d9fa83c844b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
