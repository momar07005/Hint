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
        $__internal_46bc7e61d7d34830b763699033588fe034d9dd922188f735a86ec1484fdc6248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46bc7e61d7d34830b763699033588fe034d9dd922188f735a86ec1484fdc6248->enter($__internal_46bc7e61d7d34830b763699033588fe034d9dd922188f735a86ec1484fdc6248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_c07478407acd0980ed10594b428bf0c81b718b560157955ed9997b949102808e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07478407acd0980ed10594b428bf0c81b718b560157955ed9997b949102808e->enter($__internal_c07478407acd0980ed10594b428bf0c81b718b560157955ed9997b949102808e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46bc7e61d7d34830b763699033588fe034d9dd922188f735a86ec1484fdc6248->leave($__internal_46bc7e61d7d34830b763699033588fe034d9dd922188f735a86ec1484fdc6248_prof);

        
        $__internal_c07478407acd0980ed10594b428bf0c81b718b560157955ed9997b949102808e->leave($__internal_c07478407acd0980ed10594b428bf0c81b718b560157955ed9997b949102808e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_211e1ef63d0e6c013490fe39d1a9ba217ca2a3e9573d7e466f796ac353eefb09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_211e1ef63d0e6c013490fe39d1a9ba217ca2a3e9573d7e466f796ac353eefb09->enter($__internal_211e1ef63d0e6c013490fe39d1a9ba217ca2a3e9573d7e466f796ac353eefb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b02ef2eaaac8bede63edd5a87471f2a15a38b132df4ff45339a6d9a101d270a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b02ef2eaaac8bede63edd5a87471f2a15a38b132df4ff45339a6d9a101d270a->enter($__internal_4b02ef2eaaac8bede63edd5a87471f2a15a38b132df4ff45339a6d9a101d270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_4b02ef2eaaac8bede63edd5a87471f2a15a38b132df4ff45339a6d9a101d270a->leave($__internal_4b02ef2eaaac8bede63edd5a87471f2a15a38b132df4ff45339a6d9a101d270a_prof);

        
        $__internal_211e1ef63d0e6c013490fe39d1a9ba217ca2a3e9573d7e466f796ac353eefb09->leave($__internal_211e1ef63d0e6c013490fe39d1a9ba217ca2a3e9573d7e466f796ac353eefb09_prof);

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
