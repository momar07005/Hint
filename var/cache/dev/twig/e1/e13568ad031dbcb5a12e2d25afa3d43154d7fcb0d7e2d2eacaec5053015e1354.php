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
        $__internal_007e15460253d7bbc74c998d2a26f6cd8098cad9ae6631f5575dd4560650128a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007e15460253d7bbc74c998d2a26f6cd8098cad9ae6631f5575dd4560650128a->enter($__internal_007e15460253d7bbc74c998d2a26f6cd8098cad9ae6631f5575dd4560650128a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_e42fa2cd1229744d767783eb9c0e67582da8d961df167f2cfc8965974bd99165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42fa2cd1229744d767783eb9c0e67582da8d961df167f2cfc8965974bd99165->enter($__internal_e42fa2cd1229744d767783eb9c0e67582da8d961df167f2cfc8965974bd99165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_007e15460253d7bbc74c998d2a26f6cd8098cad9ae6631f5575dd4560650128a->leave($__internal_007e15460253d7bbc74c998d2a26f6cd8098cad9ae6631f5575dd4560650128a_prof);

        
        $__internal_e42fa2cd1229744d767783eb9c0e67582da8d961df167f2cfc8965974bd99165->leave($__internal_e42fa2cd1229744d767783eb9c0e67582da8d961df167f2cfc8965974bd99165_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e434c4f2ab50f26ad046b19b354d478069fa8fc47c311aba6c3d58e920d8263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e434c4f2ab50f26ad046b19b354d478069fa8fc47c311aba6c3d58e920d8263->enter($__internal_6e434c4f2ab50f26ad046b19b354d478069fa8fc47c311aba6c3d58e920d8263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f565f3f07dcb76edabcc3ee887db439803de44bff7f3fa3569fc29ee176baefb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f565f3f07dcb76edabcc3ee887db439803de44bff7f3fa3569fc29ee176baefb->enter($__internal_f565f3f07dcb76edabcc3ee887db439803de44bff7f3fa3569fc29ee176baefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f565f3f07dcb76edabcc3ee887db439803de44bff7f3fa3569fc29ee176baefb->leave($__internal_f565f3f07dcb76edabcc3ee887db439803de44bff7f3fa3569fc29ee176baefb_prof);

        
        $__internal_6e434c4f2ab50f26ad046b19b354d478069fa8fc47c311aba6c3d58e920d8263->leave($__internal_6e434c4f2ab50f26ad046b19b354d478069fa8fc47c311aba6c3d58e920d8263_prof);

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
", "FOSUserBundle:Security:login.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
