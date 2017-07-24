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
        $__internal_ead92baf5da5f7f438c65888c50de41cc57b2b417d8cd263e509c7c4cb788e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead92baf5da5f7f438c65888c50de41cc57b2b417d8cd263e509c7c4cb788e35->enter($__internal_ead92baf5da5f7f438c65888c50de41cc57b2b417d8cd263e509c7c4cb788e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_ae52b6cf28df4510ad3dd97825d99c8eb81733bbeecca40a1db2820866292be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae52b6cf28df4510ad3dd97825d99c8eb81733bbeecca40a1db2820866292be4->enter($__internal_ae52b6cf28df4510ad3dd97825d99c8eb81733bbeecca40a1db2820866292be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ead92baf5da5f7f438c65888c50de41cc57b2b417d8cd263e509c7c4cb788e35->leave($__internal_ead92baf5da5f7f438c65888c50de41cc57b2b417d8cd263e509c7c4cb788e35_prof);

        
        $__internal_ae52b6cf28df4510ad3dd97825d99c8eb81733bbeecca40a1db2820866292be4->leave($__internal_ae52b6cf28df4510ad3dd97825d99c8eb81733bbeecca40a1db2820866292be4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18ac070e82b62c03b8465ba8090c83d726913ddc41832e04ca1141b8ae4ed9b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ac070e82b62c03b8465ba8090c83d726913ddc41832e04ca1141b8ae4ed9b1->enter($__internal_18ac070e82b62c03b8465ba8090c83d726913ddc41832e04ca1141b8ae4ed9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3ada3a625880bef26390616f7794807c4141f76aa308595b0881d92432b1fc9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ada3a625880bef26390616f7794807c4141f76aa308595b0881d92432b1fc9b->enter($__internal_3ada3a625880bef26390616f7794807c4141f76aa308595b0881d92432b1fc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3ada3a625880bef26390616f7794807c4141f76aa308595b0881d92432b1fc9b->leave($__internal_3ada3a625880bef26390616f7794807c4141f76aa308595b0881d92432b1fc9b_prof);

        
        $__internal_18ac070e82b62c03b8465ba8090c83d726913ddc41832e04ca1141b8ae4ed9b1->leave($__internal_18ac070e82b62c03b8465ba8090c83d726913ddc41832e04ca1141b8ae4ed9b1_prof);

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
", "FOSUserBundle:Group:list.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
