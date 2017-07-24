<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_63a78e45f285da395fc8a9af3344dd24563c7e334e44e148df4828b03e0f05ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_00b90357e867e680ec45d210874760e7f34ad9fec9b82ba907c63baa22c4d9a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b90357e867e680ec45d210874760e7f34ad9fec9b82ba907c63baa22c4d9a8->enter($__internal_00b90357e867e680ec45d210874760e7f34ad9fec9b82ba907c63baa22c4d9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_4a81221b86d2f880c5e810b633747379e7af0642e7c5f0512f6e8717a983cd3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a81221b86d2f880c5e810b633747379e7af0642e7c5f0512f6e8717a983cd3c->enter($__internal_4a81221b86d2f880c5e810b633747379e7af0642e7c5f0512f6e8717a983cd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00b90357e867e680ec45d210874760e7f34ad9fec9b82ba907c63baa22c4d9a8->leave($__internal_00b90357e867e680ec45d210874760e7f34ad9fec9b82ba907c63baa22c4d9a8_prof);

        
        $__internal_4a81221b86d2f880c5e810b633747379e7af0642e7c5f0512f6e8717a983cd3c->leave($__internal_4a81221b86d2f880c5e810b633747379e7af0642e7c5f0512f6e8717a983cd3c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec2e927661a05929a133f4bc35374b03f0575f38daffe1948266955cf0e9470b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2e927661a05929a133f4bc35374b03f0575f38daffe1948266955cf0e9470b->enter($__internal_ec2e927661a05929a133f4bc35374b03f0575f38daffe1948266955cf0e9470b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_63388780b7bb3926d5b38957bf941cdd0210e2f119c1f8af29e4b899acebeeae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63388780b7bb3926d5b38957bf941cdd0210e2f119c1f8af29e4b899acebeeae->enter($__internal_63388780b7bb3926d5b38957bf941cdd0210e2f119c1f8af29e4b899acebeeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_63388780b7bb3926d5b38957bf941cdd0210e2f119c1f8af29e4b899acebeeae->leave($__internal_63388780b7bb3926d5b38957bf941cdd0210e2f119c1f8af29e4b899acebeeae_prof);

        
        $__internal_ec2e927661a05929a133f4bc35374b03f0575f38daffe1948266955cf0e9470b->leave($__internal_ec2e927661a05929a133f4bc35374b03f0575f38daffe1948266955cf0e9470b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
