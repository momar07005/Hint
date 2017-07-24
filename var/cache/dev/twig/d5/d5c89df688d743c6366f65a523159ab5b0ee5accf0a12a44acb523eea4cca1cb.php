<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_514958e2ebbca0ab400b5f7b13950f2bba7e75dd7219e9db93da65747ce20ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_1ed55c35e0edb699d33c209956365e4c4e68e2eb9a4cd042d625b80ae2029f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed55c35e0edb699d33c209956365e4c4e68e2eb9a4cd042d625b80ae2029f1a->enter($__internal_1ed55c35e0edb699d33c209956365e4c4e68e2eb9a4cd042d625b80ae2029f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_f5d95ba49d1b0d97969f27984078a74355e090ecff87165d64e3775683cedfb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d95ba49d1b0d97969f27984078a74355e090ecff87165d64e3775683cedfb2->enter($__internal_f5d95ba49d1b0d97969f27984078a74355e090ecff87165d64e3775683cedfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ed55c35e0edb699d33c209956365e4c4e68e2eb9a4cd042d625b80ae2029f1a->leave($__internal_1ed55c35e0edb699d33c209956365e4c4e68e2eb9a4cd042d625b80ae2029f1a_prof);

        
        $__internal_f5d95ba49d1b0d97969f27984078a74355e090ecff87165d64e3775683cedfb2->leave($__internal_f5d95ba49d1b0d97969f27984078a74355e090ecff87165d64e3775683cedfb2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ccc2147610350f86f99c2e5df671bce83d94e792a457948f01a73811565aef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ccc2147610350f86f99c2e5df671bce83d94e792a457948f01a73811565aef4->enter($__internal_9ccc2147610350f86f99c2e5df671bce83d94e792a457948f01a73811565aef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e80849c65cd5bede947d34b41bc4a9d555974d858d0bdb8f5d2edb3afb9ceecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80849c65cd5bede947d34b41bc4a9d555974d858d0bdb8f5d2edb3afb9ceecf->enter($__internal_e80849c65cd5bede947d34b41bc4a9d555974d858d0bdb8f5d2edb3afb9ceecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e80849c65cd5bede947d34b41bc4a9d555974d858d0bdb8f5d2edb3afb9ceecf->leave($__internal_e80849c65cd5bede947d34b41bc4a9d555974d858d0bdb8f5d2edb3afb9ceecf_prof);

        
        $__internal_9ccc2147610350f86f99c2e5df671bce83d94e792a457948f01a73811565aef4->leave($__internal_9ccc2147610350f86f99c2e5df671bce83d94e792a457948f01a73811565aef4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
