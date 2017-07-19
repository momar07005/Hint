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
        $__internal_917f1ca2be57b15f87a44946cc9803caa252f8c7356eaa2561649e41e166b1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917f1ca2be57b15f87a44946cc9803caa252f8c7356eaa2561649e41e166b1cd->enter($__internal_917f1ca2be57b15f87a44946cc9803caa252f8c7356eaa2561649e41e166b1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_ced66212bb1833a8d67beef653f73db36e210b80f4bb2ad9e04af3a860ed143b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced66212bb1833a8d67beef653f73db36e210b80f4bb2ad9e04af3a860ed143b->enter($__internal_ced66212bb1833a8d67beef653f73db36e210b80f4bb2ad9e04af3a860ed143b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_917f1ca2be57b15f87a44946cc9803caa252f8c7356eaa2561649e41e166b1cd->leave($__internal_917f1ca2be57b15f87a44946cc9803caa252f8c7356eaa2561649e41e166b1cd_prof);

        
        $__internal_ced66212bb1833a8d67beef653f73db36e210b80f4bb2ad9e04af3a860ed143b->leave($__internal_ced66212bb1833a8d67beef653f73db36e210b80f4bb2ad9e04af3a860ed143b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_389cbe49f63360ffd8ac7a1461781fd99a9a1038711be9506f7f15a647045657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_389cbe49f63360ffd8ac7a1461781fd99a9a1038711be9506f7f15a647045657->enter($__internal_389cbe49f63360ffd8ac7a1461781fd99a9a1038711be9506f7f15a647045657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_936aca47a28ea748f888d6286c5ef97a2661389c55c050a3b9645aea25f26112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936aca47a28ea748f888d6286c5ef97a2661389c55c050a3b9645aea25f26112->enter($__internal_936aca47a28ea748f888d6286c5ef97a2661389c55c050a3b9645aea25f26112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_936aca47a28ea748f888d6286c5ef97a2661389c55c050a3b9645aea25f26112->leave($__internal_936aca47a28ea748f888d6286c5ef97a2661389c55c050a3b9645aea25f26112_prof);

        
        $__internal_389cbe49f63360ffd8ac7a1461781fd99a9a1038711be9506f7f15a647045657->leave($__internal_389cbe49f63360ffd8ac7a1461781fd99a9a1038711be9506f7f15a647045657_prof);

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
