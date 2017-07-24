<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e4dbd497deb6193d31ca6c58354dfc01ec7cfb49cfc91bf552561bd8b69f7447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_ed7e29362e3947dd6f0c6c4dfdfc713ee0ce11207dc7f0f9aec9de7591221b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7e29362e3947dd6f0c6c4dfdfc713ee0ce11207dc7f0f9aec9de7591221b1c->enter($__internal_ed7e29362e3947dd6f0c6c4dfdfc713ee0ce11207dc7f0f9aec9de7591221b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_3a9b26acc2898fe380b1181909ddeb1e03df33b93536f5dad4f1760438f74621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9b26acc2898fe380b1181909ddeb1e03df33b93536f5dad4f1760438f74621->enter($__internal_3a9b26acc2898fe380b1181909ddeb1e03df33b93536f5dad4f1760438f74621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed7e29362e3947dd6f0c6c4dfdfc713ee0ce11207dc7f0f9aec9de7591221b1c->leave($__internal_ed7e29362e3947dd6f0c6c4dfdfc713ee0ce11207dc7f0f9aec9de7591221b1c_prof);

        
        $__internal_3a9b26acc2898fe380b1181909ddeb1e03df33b93536f5dad4f1760438f74621->leave($__internal_3a9b26acc2898fe380b1181909ddeb1e03df33b93536f5dad4f1760438f74621_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f41ab811b8c72140f4d2a2f81dfcc117c955184954c29a2891389720ba4638d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41ab811b8c72140f4d2a2f81dfcc117c955184954c29a2891389720ba4638d2->enter($__internal_f41ab811b8c72140f4d2a2f81dfcc117c955184954c29a2891389720ba4638d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4cfe42b3648dccda84b354be54901439c0bfe65c9ec5e75a8750db7fe52b3fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cfe42b3648dccda84b354be54901439c0bfe65c9ec5e75a8750db7fe52b3fd9->enter($__internal_4cfe42b3648dccda84b354be54901439c0bfe65c9ec5e75a8750db7fe52b3fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4cfe42b3648dccda84b354be54901439c0bfe65c9ec5e75a8750db7fe52b3fd9->leave($__internal_4cfe42b3648dccda84b354be54901439c0bfe65c9ec5e75a8750db7fe52b3fd9_prof);

        
        $__internal_f41ab811b8c72140f4d2a2f81dfcc117c955184954c29a2891389720ba4638d2->leave($__internal_f41ab811b8c72140f4d2a2f81dfcc117c955184954c29a2891389720ba4638d2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
