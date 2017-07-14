<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e25fcc805e0568ffee2ef8fba17725a0de432b9115a772f1b7a63be0d2c3678e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_ffca4f2d1cf0dc94ddb140403c780fa972c5a55d9e08a217ea389e1aaa565301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffca4f2d1cf0dc94ddb140403c780fa972c5a55d9e08a217ea389e1aaa565301->enter($__internal_ffca4f2d1cf0dc94ddb140403c780fa972c5a55d9e08a217ea389e1aaa565301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_79c87415b5a9d839cf41475ce033839a860c603642083eeb89f16ac5e535f9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c87415b5a9d839cf41475ce033839a860c603642083eeb89f16ac5e535f9a6->enter($__internal_79c87415b5a9d839cf41475ce033839a860c603642083eeb89f16ac5e535f9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffca4f2d1cf0dc94ddb140403c780fa972c5a55d9e08a217ea389e1aaa565301->leave($__internal_ffca4f2d1cf0dc94ddb140403c780fa972c5a55d9e08a217ea389e1aaa565301_prof);

        
        $__internal_79c87415b5a9d839cf41475ce033839a860c603642083eeb89f16ac5e535f9a6->leave($__internal_79c87415b5a9d839cf41475ce033839a860c603642083eeb89f16ac5e535f9a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_460f7715dbb0a2a724832bbd032b7129cf2fe228dbf97326cee86fdda479aba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_460f7715dbb0a2a724832bbd032b7129cf2fe228dbf97326cee86fdda479aba5->enter($__internal_460f7715dbb0a2a724832bbd032b7129cf2fe228dbf97326cee86fdda479aba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f755197ced33b8fd2d2b20bbdb389dbd4c1b07958466758ab930d10f3d45ee7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f755197ced33b8fd2d2b20bbdb389dbd4c1b07958466758ab930d10f3d45ee7f->enter($__internal_f755197ced33b8fd2d2b20bbdb389dbd4c1b07958466758ab930d10f3d45ee7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_f755197ced33b8fd2d2b20bbdb389dbd4c1b07958466758ab930d10f3d45ee7f->leave($__internal_f755197ced33b8fd2d2b20bbdb389dbd4c1b07958466758ab930d10f3d45ee7f_prof);

        
        $__internal_460f7715dbb0a2a724832bbd032b7129cf2fe228dbf97326cee86fdda479aba5->leave($__internal_460f7715dbb0a2a724832bbd032b7129cf2fe228dbf97326cee86fdda479aba5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
