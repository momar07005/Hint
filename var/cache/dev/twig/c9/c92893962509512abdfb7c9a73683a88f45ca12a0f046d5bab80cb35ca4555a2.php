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
        $__internal_3277fca3d0d7943204e0811be08d4adb6d52f11b7c5a4a76f37671be397c56b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3277fca3d0d7943204e0811be08d4adb6d52f11b7c5a4a76f37671be397c56b8->enter($__internal_3277fca3d0d7943204e0811be08d4adb6d52f11b7c5a4a76f37671be397c56b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_961d602da9358581b342fe222cd2bfe6b9ba4dd2af881973008addd7eb7b03ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961d602da9358581b342fe222cd2bfe6b9ba4dd2af881973008addd7eb7b03ce->enter($__internal_961d602da9358581b342fe222cd2bfe6b9ba4dd2af881973008addd7eb7b03ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3277fca3d0d7943204e0811be08d4adb6d52f11b7c5a4a76f37671be397c56b8->leave($__internal_3277fca3d0d7943204e0811be08d4adb6d52f11b7c5a4a76f37671be397c56b8_prof);

        
        $__internal_961d602da9358581b342fe222cd2bfe6b9ba4dd2af881973008addd7eb7b03ce->leave($__internal_961d602da9358581b342fe222cd2bfe6b9ba4dd2af881973008addd7eb7b03ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b01601dd57d080088514bbad03204996919172c8339d1a0b71315ea5c2bf20db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01601dd57d080088514bbad03204996919172c8339d1a0b71315ea5c2bf20db->enter($__internal_b01601dd57d080088514bbad03204996919172c8339d1a0b71315ea5c2bf20db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8e5228e09c1ebaa68f34c62a218007218b68a5447985fed1a69232a7cffaf07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5228e09c1ebaa68f34c62a218007218b68a5447985fed1a69232a7cffaf07d->enter($__internal_8e5228e09c1ebaa68f34c62a218007218b68a5447985fed1a69232a7cffaf07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_8e5228e09c1ebaa68f34c62a218007218b68a5447985fed1a69232a7cffaf07d->leave($__internal_8e5228e09c1ebaa68f34c62a218007218b68a5447985fed1a69232a7cffaf07d_prof);

        
        $__internal_b01601dd57d080088514bbad03204996919172c8339d1a0b71315ea5c2bf20db->leave($__internal_b01601dd57d080088514bbad03204996919172c8339d1a0b71315ea5c2bf20db_prof);

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
