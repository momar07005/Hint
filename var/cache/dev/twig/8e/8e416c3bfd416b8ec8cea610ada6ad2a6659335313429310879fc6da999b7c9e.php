<?php

/* HWIOAuthBundle:Connect:connect_success.html.twig */
class __TwigTemplate_64091ed9345dcbb5ffd8719db98f5bb178f6fe9c6e13a32d79bd1de93b6f7169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:connect_success.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61f83df9f73e3725ac70082de72871e5576109b438b922a4100fb4c79419f4c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f83df9f73e3725ac70082de72871e5576109b438b922a4100fb4c79419f4c4->enter($__internal_61f83df9f73e3725ac70082de72871e5576109b438b922a4100fb4c79419f4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $__internal_c31fed96478ea4f76e8326adb5f5271f9c34940199192a86c3412d7aa782f373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31fed96478ea4f76e8326adb5f5271f9c34940199192a86c3412d7aa782f373->enter($__internal_c31fed96478ea4f76e8326adb5f5271f9c34940199192a86c3412d7aa782f373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61f83df9f73e3725ac70082de72871e5576109b438b922a4100fb4c79419f4c4->leave($__internal_61f83df9f73e3725ac70082de72871e5576109b438b922a4100fb4c79419f4c4_prof);

        
        $__internal_c31fed96478ea4f76e8326adb5f5271f9c34940199192a86c3412d7aa782f373->leave($__internal_c31fed96478ea4f76e8326adb5f5271f9c34940199192a86c3412d7aa782f373_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_2a3884bc1b5979a2234352d1b031264d4a1009ccff5e1d19b4fbfbf58115a91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3884bc1b5979a2234352d1b031264d4a1009ccff5e1d19b4fbfbf58115a91d->enter($__internal_2a3884bc1b5979a2234352d1b031264d4a1009ccff5e1d19b4fbfbf58115a91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_f54f4d2e94af30746e7fd491ea8631d8a61e1894ba00ade912ed91a6da2a02fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54f4d2e94af30746e7fd491ea8631d8a61e1894ba00ade912ed91a6da2a02fc->enter($__internal_f54f4d2e94af30746e7fd491ea8631d8a61e1894ba00ade912ed91a6da2a02fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_f54f4d2e94af30746e7fd491ea8631d8a61e1894ba00ade912ed91a6da2a02fc->leave($__internal_f54f4d2e94af30746e7fd491ea8631d8a61e1894ba00ade912ed91a6da2a02fc_prof);

        
        $__internal_2a3884bc1b5979a2234352d1b031264d4a1009ccff5e1d19b4fbfbf58115a91d->leave($__internal_2a3884bc1b5979a2234352d1b031264d4a1009ccff5e1d19b4fbfbf58115a91d_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:connect_success.html.twig";
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
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    <h3>{{ 'header.success' | trans({'%name%': userInformation.realName}, 'HWIOAuthBundle') }}</h3>
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:connect_success.html.twig", "C:\\Hint\\app/Resources/HWIOAuthBundle/views/Connect/connect_success.html.twig");
    }
}
