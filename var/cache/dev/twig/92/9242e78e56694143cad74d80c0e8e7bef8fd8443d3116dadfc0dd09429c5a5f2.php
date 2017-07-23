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
        $__internal_a18d43fe70bbc98d9494dec5a084aa85effb355fb11d4d84b31b6b4bcd3794f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a18d43fe70bbc98d9494dec5a084aa85effb355fb11d4d84b31b6b4bcd3794f4->enter($__internal_a18d43fe70bbc98d9494dec5a084aa85effb355fb11d4d84b31b6b4bcd3794f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_09d9c6d2cffee99e9acb550a4f2950be7588050198ffecc693d40aa5316f45f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d9c6d2cffee99e9acb550a4f2950be7588050198ffecc693d40aa5316f45f7->enter($__internal_09d9c6d2cffee99e9acb550a4f2950be7588050198ffecc693d40aa5316f45f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a18d43fe70bbc98d9494dec5a084aa85effb355fb11d4d84b31b6b4bcd3794f4->leave($__internal_a18d43fe70bbc98d9494dec5a084aa85effb355fb11d4d84b31b6b4bcd3794f4_prof);

        
        $__internal_09d9c6d2cffee99e9acb550a4f2950be7588050198ffecc693d40aa5316f45f7->leave($__internal_09d9c6d2cffee99e9acb550a4f2950be7588050198ffecc693d40aa5316f45f7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ad3214a55147068879a31b836218f7c1da43b258df2638055794fb3c5e062b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad3214a55147068879a31b836218f7c1da43b258df2638055794fb3c5e062b8->enter($__internal_6ad3214a55147068879a31b836218f7c1da43b258df2638055794fb3c5e062b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0162c51babf4b8572e9e2c0b32c85e1f92b35ba84f0a4fc229f244d2fbb4d426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0162c51babf4b8572e9e2c0b32c85e1f92b35ba84f0a4fc229f244d2fbb4d426->enter($__internal_0162c51babf4b8572e9e2c0b32c85e1f92b35ba84f0a4fc229f244d2fbb4d426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_0162c51babf4b8572e9e2c0b32c85e1f92b35ba84f0a4fc229f244d2fbb4d426->leave($__internal_0162c51babf4b8572e9e2c0b32c85e1f92b35ba84f0a4fc229f244d2fbb4d426_prof);

        
        $__internal_6ad3214a55147068879a31b836218f7c1da43b258df2638055794fb3c5e062b8->leave($__internal_6ad3214a55147068879a31b836218f7c1da43b258df2638055794fb3c5e062b8_prof);

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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
