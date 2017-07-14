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
        $__internal_4fa7ecd0cfe427e9e31c2fb89973f6a334ac631d6e1b0355a1456d166bec7b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa7ecd0cfe427e9e31c2fb89973f6a334ac631d6e1b0355a1456d166bec7b38->enter($__internal_4fa7ecd0cfe427e9e31c2fb89973f6a334ac631d6e1b0355a1456d166bec7b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_3aa85492786cbd8c4f44fd66a8325d93bf98b82c8fe72cf4dab9a3252bdb17b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa85492786cbd8c4f44fd66a8325d93bf98b82c8fe72cf4dab9a3252bdb17b7->enter($__internal_3aa85492786cbd8c4f44fd66a8325d93bf98b82c8fe72cf4dab9a3252bdb17b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fa7ecd0cfe427e9e31c2fb89973f6a334ac631d6e1b0355a1456d166bec7b38->leave($__internal_4fa7ecd0cfe427e9e31c2fb89973f6a334ac631d6e1b0355a1456d166bec7b38_prof);

        
        $__internal_3aa85492786cbd8c4f44fd66a8325d93bf98b82c8fe72cf4dab9a3252bdb17b7->leave($__internal_3aa85492786cbd8c4f44fd66a8325d93bf98b82c8fe72cf4dab9a3252bdb17b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86e598e4294962c50e04d5925d76d7f7664c8a335669d2ce435749fdeaeb5b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e598e4294962c50e04d5925d76d7f7664c8a335669d2ce435749fdeaeb5b2e->enter($__internal_86e598e4294962c50e04d5925d76d7f7664c8a335669d2ce435749fdeaeb5b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_04faf0dc4855f5a99aa3cd100a656012b583db44916a9593ab7304cb12d2f891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04faf0dc4855f5a99aa3cd100a656012b583db44916a9593ab7304cb12d2f891->enter($__internal_04faf0dc4855f5a99aa3cd100a656012b583db44916a9593ab7304cb12d2f891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_04faf0dc4855f5a99aa3cd100a656012b583db44916a9593ab7304cb12d2f891->leave($__internal_04faf0dc4855f5a99aa3cd100a656012b583db44916a9593ab7304cb12d2f891_prof);

        
        $__internal_86e598e4294962c50e04d5925d76d7f7664c8a335669d2ce435749fdeaeb5b2e->leave($__internal_86e598e4294962c50e04d5925d76d7f7664c8a335669d2ce435749fdeaeb5b2e_prof);

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
", "FOSUserBundle:Profile:edit.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
