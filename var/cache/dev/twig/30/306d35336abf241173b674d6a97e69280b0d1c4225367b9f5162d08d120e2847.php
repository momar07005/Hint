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
        $__internal_ff005c6c9a4dae82488cd9315f12fad22e066e6ec57be0b1e6fe19726e328a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff005c6c9a4dae82488cd9315f12fad22e066e6ec57be0b1e6fe19726e328a5d->enter($__internal_ff005c6c9a4dae82488cd9315f12fad22e066e6ec57be0b1e6fe19726e328a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_06d693694aaafa12732e274f25b906c65d23daea41b1625aac60c82e19042ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d693694aaafa12732e274f25b906c65d23daea41b1625aac60c82e19042ab2->enter($__internal_06d693694aaafa12732e274f25b906c65d23daea41b1625aac60c82e19042ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff005c6c9a4dae82488cd9315f12fad22e066e6ec57be0b1e6fe19726e328a5d->leave($__internal_ff005c6c9a4dae82488cd9315f12fad22e066e6ec57be0b1e6fe19726e328a5d_prof);

        
        $__internal_06d693694aaafa12732e274f25b906c65d23daea41b1625aac60c82e19042ab2->leave($__internal_06d693694aaafa12732e274f25b906c65d23daea41b1625aac60c82e19042ab2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a77a6d64d4e4392503f505c1d41f064336cf3fce91a19589a85adbeb41e5c5e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77a6d64d4e4392503f505c1d41f064336cf3fce91a19589a85adbeb41e5c5e4->enter($__internal_a77a6d64d4e4392503f505c1d41f064336cf3fce91a19589a85adbeb41e5c5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c819af477e037e8b3be9d86a07ca9312d00e2f669d14a758e8c17ae7b299c56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c819af477e037e8b3be9d86a07ca9312d00e2f669d14a758e8c17ae7b299c56b->enter($__internal_c819af477e037e8b3be9d86a07ca9312d00e2f669d14a758e8c17ae7b299c56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c819af477e037e8b3be9d86a07ca9312d00e2f669d14a758e8c17ae7b299c56b->leave($__internal_c819af477e037e8b3be9d86a07ca9312d00e2f669d14a758e8c17ae7b299c56b_prof);

        
        $__internal_a77a6d64d4e4392503f505c1d41f064336cf3fce91a19589a85adbeb41e5c5e4->leave($__internal_a77a6d64d4e4392503f505c1d41f064336cf3fce91a19589a85adbeb41e5c5e4_prof);

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
