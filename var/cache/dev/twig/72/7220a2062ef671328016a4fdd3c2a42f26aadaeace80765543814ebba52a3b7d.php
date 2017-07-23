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
        $__internal_72b487cfde7b80b0b928c1c76ea7620c71577f0dfce3b30971ae58fbd9f8597a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b487cfde7b80b0b928c1c76ea7620c71577f0dfce3b30971ae58fbd9f8597a->enter($__internal_72b487cfde7b80b0b928c1c76ea7620c71577f0dfce3b30971ae58fbd9f8597a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $__internal_c4809547e2cf58805d62c9f6479b5dbe9a169b96f078e20d7e1643ca2091a336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4809547e2cf58805d62c9f6479b5dbe9a169b96f078e20d7e1643ca2091a336->enter($__internal_c4809547e2cf58805d62c9f6479b5dbe9a169b96f078e20d7e1643ca2091a336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b487cfde7b80b0b928c1c76ea7620c71577f0dfce3b30971ae58fbd9f8597a->leave($__internal_72b487cfde7b80b0b928c1c76ea7620c71577f0dfce3b30971ae58fbd9f8597a_prof);

        
        $__internal_c4809547e2cf58805d62c9f6479b5dbe9a169b96f078e20d7e1643ca2091a336->leave($__internal_c4809547e2cf58805d62c9f6479b5dbe9a169b96f078e20d7e1643ca2091a336_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_25f3de6a7dd4d7457030870492dd018aa4a457d36560fd2510f42c83395e019d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f3de6a7dd4d7457030870492dd018aa4a457d36560fd2510f42c83395e019d->enter($__internal_25f3de6a7dd4d7457030870492dd018aa4a457d36560fd2510f42c83395e019d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_735bb81778c89bba6acfb5dc186a4f56d5edb4ed8e0a76ff1a96f7e199f8f819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735bb81778c89bba6acfb5dc186a4f56d5edb4ed8e0a76ff1a96f7e199f8f819->enter($__internal_735bb81778c89bba6acfb5dc186a4f56d5edb4ed8e0a76ff1a96f7e199f8f819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_735bb81778c89bba6acfb5dc186a4f56d5edb4ed8e0a76ff1a96f7e199f8f819->leave($__internal_735bb81778c89bba6acfb5dc186a4f56d5edb4ed8e0a76ff1a96f7e199f8f819_prof);

        
        $__internal_25f3de6a7dd4d7457030870492dd018aa4a457d36560fd2510f42c83395e019d->leave($__internal_25f3de6a7dd4d7457030870492dd018aa4a457d36560fd2510f42c83395e019d_prof);

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
", "HWIOAuthBundle:Connect:registration_success.html.twig", "C:\\Hint\\app/Resources/HWIOAuthBundle/views/Connect/registration_success.html.twig");
    }
}
