<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_dbbdcb08abcafa7517aa825001ba5fc40feb09b1d154676a8e2e61d951b71e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_7291806744aa589212aed6b9d5c2b2b38c9b7bcaddaca1307bc8a58309c50822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7291806744aa589212aed6b9d5c2b2b38c9b7bcaddaca1307bc8a58309c50822->enter($__internal_7291806744aa589212aed6b9d5c2b2b38c9b7bcaddaca1307bc8a58309c50822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_22fc3052a4efdbbf31e3d58cfb1352de3092b7687d770449123c20e9e668b2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22fc3052a4efdbbf31e3d58cfb1352de3092b7687d770449123c20e9e668b2c0->enter($__internal_22fc3052a4efdbbf31e3d58cfb1352de3092b7687d770449123c20e9e668b2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7291806744aa589212aed6b9d5c2b2b38c9b7bcaddaca1307bc8a58309c50822->leave($__internal_7291806744aa589212aed6b9d5c2b2b38c9b7bcaddaca1307bc8a58309c50822_prof);

        
        $__internal_22fc3052a4efdbbf31e3d58cfb1352de3092b7687d770449123c20e9e668b2c0->leave($__internal_22fc3052a4efdbbf31e3d58cfb1352de3092b7687d770449123c20e9e668b2c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1e16b844d054627c4c8566619ce16bca4ff307174dd5fea3cde7c398e719bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e16b844d054627c4c8566619ce16bca4ff307174dd5fea3cde7c398e719bc9->enter($__internal_b1e16b844d054627c4c8566619ce16bca4ff307174dd5fea3cde7c398e719bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e4aa8e026791a961669282883a67e73d969db2ed5e2129c498fd0d8f0fc8c9a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4aa8e026791a961669282883a67e73d969db2ed5e2129c498fd0d8f0fc8c9a4->enter($__internal_e4aa8e026791a961669282883a67e73d969db2ed5e2129c498fd0d8f0fc8c9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t<div class=\"row under-header\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"title\">Se connecter</h1>
\t\t</div>
\t</div>
    ";
        // line 9
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    <script>
        \$(function() {
            \$('.login').hide();
        });
    </script>
";
        
        $__internal_e4aa8e026791a961669282883a67e73d969db2ed5e2129c498fd0d8f0fc8c9a4->leave($__internal_e4aa8e026791a961669282883a67e73d969db2ed5e2129c498fd0d8f0fc8c9a4_prof);

        
        $__internal_b1e16b844d054627c4c8566619ce16bca4ff307174dd5fea3cde7c398e719bc9->leave($__internal_b1e16b844d054627c4c8566619ce16bca4ff307174dd5fea3cde7c398e719bc9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
\t<div class=\"row under-header\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"title\">Se connecter</h1>
\t\t</div>
\t</div>
    {{ include('@FOSUser/Security/login_content.html.twig') }}
    <script>
        \$(function() {
            \$('.login').hide();
        });
    </script>
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
