<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_82882cea376725de34eb85d5e74e8099aa43dda6e9d812461008b5f374b097cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_03c26cd4611f91fb5ac0c899c5b20ebd3296dfd967839d3557250c1095a97ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c26cd4611f91fb5ac0c899c5b20ebd3296dfd967839d3557250c1095a97ee8->enter($__internal_03c26cd4611f91fb5ac0c899c5b20ebd3296dfd967839d3557250c1095a97ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_c7d63592366654f881a57afa8d54d2c4ac3ae8de329f133b8496e51b0725ea0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d63592366654f881a57afa8d54d2c4ac3ae8de329f133b8496e51b0725ea0e->enter($__internal_c7d63592366654f881a57afa8d54d2c4ac3ae8de329f133b8496e51b0725ea0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03c26cd4611f91fb5ac0c899c5b20ebd3296dfd967839d3557250c1095a97ee8->leave($__internal_03c26cd4611f91fb5ac0c899c5b20ebd3296dfd967839d3557250c1095a97ee8_prof);

        
        $__internal_c7d63592366654f881a57afa8d54d2c4ac3ae8de329f133b8496e51b0725ea0e->leave($__internal_c7d63592366654f881a57afa8d54d2c4ac3ae8de329f133b8496e51b0725ea0e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_163c1f3f870246e9fff38010a110e2288feeaa79d5f2fdbcbadb62de2a710509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163c1f3f870246e9fff38010a110e2288feeaa79d5f2fdbcbadb62de2a710509->enter($__internal_163c1f3f870246e9fff38010a110e2288feeaa79d5f2fdbcbadb62de2a710509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c5551b0293fd2ca54bcff895b11a29334291fa17518bb33bf70f7a419fbf498f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5551b0293fd2ca54bcff895b11a29334291fa17518bb33bf70f7a419fbf498f->enter($__internal_c5551b0293fd2ca54bcff895b11a29334291fa17518bb33bf70f7a419fbf498f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c5551b0293fd2ca54bcff895b11a29334291fa17518bb33bf70f7a419fbf498f->leave($__internal_c5551b0293fd2ca54bcff895b11a29334291fa17518bb33bf70f7a419fbf498f_prof);

        
        $__internal_163c1f3f870246e9fff38010a110e2288feeaa79d5f2fdbcbadb62de2a710509->leave($__internal_163c1f3f870246e9fff38010a110e2288feeaa79d5f2fdbcbadb62de2a710509_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
