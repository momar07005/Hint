<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_233bc30afc42219a9240333166f04a0ba4bb96b62e43c2fdde6fc8bf43ef07b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_6c44c758742d9b9108e10b031093fd7e477c812dbf39b89cef49b2c9e118c932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c44c758742d9b9108e10b031093fd7e477c812dbf39b89cef49b2c9e118c932->enter($__internal_6c44c758742d9b9108e10b031093fd7e477c812dbf39b89cef49b2c9e118c932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_9c765a0e7905fd435b06306e9683a4402dc1d25c8d61acc3218dde3aa627ed43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c765a0e7905fd435b06306e9683a4402dc1d25c8d61acc3218dde3aa627ed43->enter($__internal_9c765a0e7905fd435b06306e9683a4402dc1d25c8d61acc3218dde3aa627ed43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c44c758742d9b9108e10b031093fd7e477c812dbf39b89cef49b2c9e118c932->leave($__internal_6c44c758742d9b9108e10b031093fd7e477c812dbf39b89cef49b2c9e118c932_prof);

        
        $__internal_9c765a0e7905fd435b06306e9683a4402dc1d25c8d61acc3218dde3aa627ed43->leave($__internal_9c765a0e7905fd435b06306e9683a4402dc1d25c8d61acc3218dde3aa627ed43_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f822e663da5aa257302c30f4eed530082d5e50ed5839940a76123fedaf43f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f822e663da5aa257302c30f4eed530082d5e50ed5839940a76123fedaf43f66->enter($__internal_8f822e663da5aa257302c30f4eed530082d5e50ed5839940a76123fedaf43f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b4b2093ffa30559acf16567db0e4bc2e146300d5a39d0b21bb25de9cde65834a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b2093ffa30559acf16567db0e4bc2e146300d5a39d0b21bb25de9cde65834a->enter($__internal_b4b2093ffa30559acf16567db0e4bc2e146300d5a39d0b21bb25de9cde65834a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        // line 5
        echo "\t<script>
\t    \$(function() {
\t        \$('.register').hide();
\t    });
\t </script>
";
        
        $__internal_b4b2093ffa30559acf16567db0e4bc2e146300d5a39d0b21bb25de9cde65834a->leave($__internal_b4b2093ffa30559acf16567db0e4bc2e146300d5a39d0b21bb25de9cde65834a_prof);

        
        $__internal_8f822e663da5aa257302c30f4eed530082d5e50ed5839940a76123fedaf43f66->leave($__internal_8f822e663da5aa257302c30f4eed530082d5e50ed5839940a76123fedaf43f66_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
\t{% include \"@FOSUser/Registration/register_content.html.twig\" %}
\t<script>
\t    \$(function() {
\t        \$('.register').hide();
\t    });
\t </script>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
