<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_fde3360136dd48078c4ddd72a839d903db1a83badb7828034803ad440e54eaff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_4c08d5329de659f0dabe9718f1518ddc5a597051e3c552460f10ce8ffcfe9e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c08d5329de659f0dabe9718f1518ddc5a597051e3c552460f10ce8ffcfe9e02->enter($__internal_4c08d5329de659f0dabe9718f1518ddc5a597051e3c552460f10ce8ffcfe9e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_ab7bef1cc867c17efdbeb1d46ed5c1f237984504915d3b0a5207c2bc68990a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7bef1cc867c17efdbeb1d46ed5c1f237984504915d3b0a5207c2bc68990a74->enter($__internal_ab7bef1cc867c17efdbeb1d46ed5c1f237984504915d3b0a5207c2bc68990a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c08d5329de659f0dabe9718f1518ddc5a597051e3c552460f10ce8ffcfe9e02->leave($__internal_4c08d5329de659f0dabe9718f1518ddc5a597051e3c552460f10ce8ffcfe9e02_prof);

        
        $__internal_ab7bef1cc867c17efdbeb1d46ed5c1f237984504915d3b0a5207c2bc68990a74->leave($__internal_ab7bef1cc867c17efdbeb1d46ed5c1f237984504915d3b0a5207c2bc68990a74_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e60139c105b9afdb78e106230b683945ac30e405bb367744ea27e4a16518cc34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60139c105b9afdb78e106230b683945ac30e405bb367744ea27e4a16518cc34->enter($__internal_e60139c105b9afdb78e106230b683945ac30e405bb367744ea27e4a16518cc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2abe6b3302fa80f24193b4cda4af35be8aaa10adb56bc18fce55b9b8041d7267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abe6b3302fa80f24193b4cda4af35be8aaa10adb56bc18fce55b9b8041d7267->enter($__internal_2abe6b3302fa80f24193b4cda4af35be8aaa10adb56bc18fce55b9b8041d7267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_2abe6b3302fa80f24193b4cda4af35be8aaa10adb56bc18fce55b9b8041d7267->leave($__internal_2abe6b3302fa80f24193b4cda4af35be8aaa10adb56bc18fce55b9b8041d7267_prof);

        
        $__internal_e60139c105b9afdb78e106230b683945ac30e405bb367744ea27e4a16518cc34->leave($__internal_e60139c105b9afdb78e106230b683945ac30e405bb367744ea27e4a16518cc34_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
