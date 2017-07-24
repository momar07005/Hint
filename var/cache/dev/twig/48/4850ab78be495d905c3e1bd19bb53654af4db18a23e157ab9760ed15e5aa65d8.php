<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_94b3ea64fabda46e20ee47a4d49c2030e52788807924e1ac5babb68a2e0fa9eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_a916cdedd8743cbda201a6fbb6daa4b82900de25a7bfe5f519be41c87e6c6e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a916cdedd8743cbda201a6fbb6daa4b82900de25a7bfe5f519be41c87e6c6e41->enter($__internal_a916cdedd8743cbda201a6fbb6daa4b82900de25a7bfe5f519be41c87e6c6e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_68a9f695cd6beba53a81bb5f8b0dbc970afd80f6ca66f5b3e3d1032f520fb380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a9f695cd6beba53a81bb5f8b0dbc970afd80f6ca66f5b3e3d1032f520fb380->enter($__internal_68a9f695cd6beba53a81bb5f8b0dbc970afd80f6ca66f5b3e3d1032f520fb380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a916cdedd8743cbda201a6fbb6daa4b82900de25a7bfe5f519be41c87e6c6e41->leave($__internal_a916cdedd8743cbda201a6fbb6daa4b82900de25a7bfe5f519be41c87e6c6e41_prof);

        
        $__internal_68a9f695cd6beba53a81bb5f8b0dbc970afd80f6ca66f5b3e3d1032f520fb380->leave($__internal_68a9f695cd6beba53a81bb5f8b0dbc970afd80f6ca66f5b3e3d1032f520fb380_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_531b65fbda0affe19ab905fefa0a0265fc9172bbda82038df12b4dfe1ac7c25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_531b65fbda0affe19ab905fefa0a0265fc9172bbda82038df12b4dfe1ac7c25b->enter($__internal_531b65fbda0affe19ab905fefa0a0265fc9172bbda82038df12b4dfe1ac7c25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3b931b25f50a7248a3d8effc7f6a0de2788faad611f330f34625f551cb651711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b931b25f50a7248a3d8effc7f6a0de2788faad611f330f34625f551cb651711->enter($__internal_3b931b25f50a7248a3d8effc7f6a0de2788faad611f330f34625f551cb651711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3b931b25f50a7248a3d8effc7f6a0de2788faad611f330f34625f551cb651711->leave($__internal_3b931b25f50a7248a3d8effc7f6a0de2788faad611f330f34625f551cb651711_prof);

        
        $__internal_531b65fbda0affe19ab905fefa0a0265fc9172bbda82038df12b4dfe1ac7c25b->leave($__internal_531b65fbda0affe19ab905fefa0a0265fc9172bbda82038df12b4dfe1ac7c25b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
