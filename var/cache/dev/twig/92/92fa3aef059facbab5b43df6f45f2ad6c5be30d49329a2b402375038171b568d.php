<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_6d7293ee10c8b292354c28abe376587062ec212d92950df3b3d80bd8aca47a5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_397963ca600dc44e0e988ea07df3784d1ad419572959b7b832635964c265d687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397963ca600dc44e0e988ea07df3784d1ad419572959b7b832635964c265d687->enter($__internal_397963ca600dc44e0e988ea07df3784d1ad419572959b7b832635964c265d687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_49618d53cdaebdc51144bd80d435e779da3cd6ff7cfd0af74c3363d2dedd2fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49618d53cdaebdc51144bd80d435e779da3cd6ff7cfd0af74c3363d2dedd2fc3->enter($__internal_49618d53cdaebdc51144bd80d435e779da3cd6ff7cfd0af74c3363d2dedd2fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_397963ca600dc44e0e988ea07df3784d1ad419572959b7b832635964c265d687->leave($__internal_397963ca600dc44e0e988ea07df3784d1ad419572959b7b832635964c265d687_prof);

        
        $__internal_49618d53cdaebdc51144bd80d435e779da3cd6ff7cfd0af74c3363d2dedd2fc3->leave($__internal_49618d53cdaebdc51144bd80d435e779da3cd6ff7cfd0af74c3363d2dedd2fc3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb1e870fe998ceefa5dd4e74c478b449632210299fd92c85727f2b97235bec1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1e870fe998ceefa5dd4e74c478b449632210299fd92c85727f2b97235bec1b->enter($__internal_bb1e870fe998ceefa5dd4e74c478b449632210299fd92c85727f2b97235bec1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_998e182e0676e58fc511634621059ce6cc748855b1c8cef9d1222a73b9732e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998e182e0676e58fc511634621059ce6cc748855b1c8cef9d1222a73b9732e81->enter($__internal_998e182e0676e58fc511634621059ce6cc748855b1c8cef9d1222a73b9732e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_998e182e0676e58fc511634621059ce6cc748855b1c8cef9d1222a73b9732e81->leave($__internal_998e182e0676e58fc511634621059ce6cc748855b1c8cef9d1222a73b9732e81_prof);

        
        $__internal_bb1e870fe998ceefa5dd4e74c478b449632210299fd92c85727f2b97235bec1b->leave($__internal_bb1e870fe998ceefa5dd4e74c478b449632210299fd92c85727f2b97235bec1b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
