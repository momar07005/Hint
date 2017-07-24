<?php

/* HWIOAuthBundle:Connect:registration_success.html.twig */
class __TwigTemplate_4d0b116cbaa8dbdede749ac2c85899ffe1cf561df283b74d06ecb745ed0dc1a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:registration_success.html.twig", 1);
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
        $__internal_f7c8a56218e38d56cf30c3acdcfd534a8efff6067994ff4cc79b1614890667fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c8a56218e38d56cf30c3acdcfd534a8efff6067994ff4cc79b1614890667fe->enter($__internal_f7c8a56218e38d56cf30c3acdcfd534a8efff6067994ff4cc79b1614890667fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $__internal_f38bcd771f95f2444ac6b4ef1d12c77f776fc941805b7ae72f07e38c1b4c3d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38bcd771f95f2444ac6b4ef1d12c77f776fc941805b7ae72f07e38c1b4c3d58->enter($__internal_f38bcd771f95f2444ac6b4ef1d12c77f776fc941805b7ae72f07e38c1b4c3d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7c8a56218e38d56cf30c3acdcfd534a8efff6067994ff4cc79b1614890667fe->leave($__internal_f7c8a56218e38d56cf30c3acdcfd534a8efff6067994ff4cc79b1614890667fe_prof);

        
        $__internal_f38bcd771f95f2444ac6b4ef1d12c77f776fc941805b7ae72f07e38c1b4c3d58->leave($__internal_f38bcd771f95f2444ac6b4ef1d12c77f776fc941805b7ae72f07e38c1b4c3d58_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_a20c81533cee46cccbb8dab80df26036137a42d31446163c5ddda8ff71fd1cc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20c81533cee46cccbb8dab80df26036137a42d31446163c5ddda8ff71fd1cc4->enter($__internal_a20c81533cee46cccbb8dab80df26036137a42d31446163c5ddda8ff71fd1cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_b2f85edd6fa4d4352c6bbab1590c696cff329bf289e81571bb0ea97148e509c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f85edd6fa4d4352c6bbab1590c696cff329bf289e81571bb0ea97148e509c5->enter($__internal_b2f85edd6fa4d4352c6bbab1590c696cff329bf289e81571bb0ea97148e509c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_b2f85edd6fa4d4352c6bbab1590c696cff329bf289e81571bb0ea97148e509c5->leave($__internal_b2f85edd6fa4d4352c6bbab1590c696cff329bf289e81571bb0ea97148e509c5_prof);

        
        $__internal_a20c81533cee46cccbb8dab80df26036137a42d31446163c5ddda8ff71fd1cc4->leave($__internal_a20c81533cee46cccbb8dab80df26036137a42d31446163c5ddda8ff71fd1cc4_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration_success.html.twig";
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
    <h3>{{ 'header.registration_success' | trans({'%username%': app.user.username}, 'HWIOAuthBundle') }}</h3>
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:registration_success.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/HWIOAuthBundle/views/Connect/registration_success.html.twig");
    }
}
