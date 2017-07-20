<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7687bb1c1c6aa511a4d6f4947d6fc43df0e4d28db4aa53199e73850c9ab26c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_4e54bf352a0c554646bb56a364b7c4bd4884ac88d5038705e0906c5a8d4c3ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e54bf352a0c554646bb56a364b7c4bd4884ac88d5038705e0906c5a8d4c3ff2->enter($__internal_4e54bf352a0c554646bb56a364b7c4bd4884ac88d5038705e0906c5a8d4c3ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_a04fe53107279e6d9e30df9e68c51a0a456d0101504f576ae77ca66b0ffefd7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04fe53107279e6d9e30df9e68c51a0a456d0101504f576ae77ca66b0ffefd7e->enter($__internal_a04fe53107279e6d9e30df9e68c51a0a456d0101504f576ae77ca66b0ffefd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e54bf352a0c554646bb56a364b7c4bd4884ac88d5038705e0906c5a8d4c3ff2->leave($__internal_4e54bf352a0c554646bb56a364b7c4bd4884ac88d5038705e0906c5a8d4c3ff2_prof);

        
        $__internal_a04fe53107279e6d9e30df9e68c51a0a456d0101504f576ae77ca66b0ffefd7e->leave($__internal_a04fe53107279e6d9e30df9e68c51a0a456d0101504f576ae77ca66b0ffefd7e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a61fb00d4043df19f47ef6c3bc1df23741c66fe056fc285c1aaaa1dec69edc81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61fb00d4043df19f47ef6c3bc1df23741c66fe056fc285c1aaaa1dec69edc81->enter($__internal_a61fb00d4043df19f47ef6c3bc1df23741c66fe056fc285c1aaaa1dec69edc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b5005abeb7c90034b6860bdb3e6c7aada118497efe6195f34651aef5ee0b681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5005abeb7c90034b6860bdb3e6c7aada118497efe6195f34651aef5ee0b681->enter($__internal_9b5005abeb7c90034b6860bdb3e6c7aada118497efe6195f34651aef5ee0b681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9b5005abeb7c90034b6860bdb3e6c7aada118497efe6195f34651aef5ee0b681->leave($__internal_9b5005abeb7c90034b6860bdb3e6c7aada118497efe6195f34651aef5ee0b681_prof);

        
        $__internal_a61fb00d4043df19f47ef6c3bc1df23741c66fe056fc285c1aaaa1dec69edc81->leave($__internal_a61fb00d4043df19f47ef6c3bc1df23741c66fe056fc285c1aaaa1dec69edc81_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
