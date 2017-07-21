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
        $__internal_cf4ad1fb6b280aca70ec7a1067dcb672b20225ead83cbc682147785e40c84483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4ad1fb6b280aca70ec7a1067dcb672b20225ead83cbc682147785e40c84483->enter($__internal_cf4ad1fb6b280aca70ec7a1067dcb672b20225ead83cbc682147785e40c84483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_d57f74f5f33294c61d0c7d95df748e3b86696487a719ea8c03c0b2139de8fb4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57f74f5f33294c61d0c7d95df748e3b86696487a719ea8c03c0b2139de8fb4f->enter($__internal_d57f74f5f33294c61d0c7d95df748e3b86696487a719ea8c03c0b2139de8fb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf4ad1fb6b280aca70ec7a1067dcb672b20225ead83cbc682147785e40c84483->leave($__internal_cf4ad1fb6b280aca70ec7a1067dcb672b20225ead83cbc682147785e40c84483_prof);

        
        $__internal_d57f74f5f33294c61d0c7d95df748e3b86696487a719ea8c03c0b2139de8fb4f->leave($__internal_d57f74f5f33294c61d0c7d95df748e3b86696487a719ea8c03c0b2139de8fb4f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8af54376ed863d75a604a59d046ca241dac6037ca97ac8be8622caceb5e10a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8af54376ed863d75a604a59d046ca241dac6037ca97ac8be8622caceb5e10a6->enter($__internal_b8af54376ed863d75a604a59d046ca241dac6037ca97ac8be8622caceb5e10a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6487db4e8fcaa9911d813fb57493cd016c25b1eddc5d42818188de4ada7c7f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6487db4e8fcaa9911d813fb57493cd016c25b1eddc5d42818188de4ada7c7f84->enter($__internal_6487db4e8fcaa9911d813fb57493cd016c25b1eddc5d42818188de4ada7c7f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6487db4e8fcaa9911d813fb57493cd016c25b1eddc5d42818188de4ada7c7f84->leave($__internal_6487db4e8fcaa9911d813fb57493cd016c25b1eddc5d42818188de4ada7c7f84_prof);

        
        $__internal_b8af54376ed863d75a604a59d046ca241dac6037ca97ac8be8622caceb5e10a6->leave($__internal_b8af54376ed863d75a604a59d046ca241dac6037ca97ac8be8622caceb5e10a6_prof);

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
", "FOSUserBundle:Group:edit.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
