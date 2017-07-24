<?php

/* HWIOAuthBundle:Connect:registration.html.twig */
class __TwigTemplate_8f5e3cf4ae3137e5902338037eebc60d4c74683dff64cb6c0342a41f33dbe059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:registration.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83e225e36529b90f836214dab3638ed49e5cfeba38cd2eb71184b6d163a09781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e225e36529b90f836214dab3638ed49e5cfeba38cd2eb71184b6d163a09781->enter($__internal_83e225e36529b90f836214dab3638ed49e5cfeba38cd2eb71184b6d163a09781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration.html.twig"));

        $__internal_2b980edf6d149506acd9345fb610306b94227196f3da6a7b8d92c0baa94013b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b980edf6d149506acd9345fb610306b94227196f3da6a7b8d92c0baa94013b0->enter($__internal_2b980edf6d149506acd9345fb610306b94227196f3da6a7b8d92c0baa94013b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83e225e36529b90f836214dab3638ed49e5cfeba38cd2eb71184b6d163a09781->leave($__internal_83e225e36529b90f836214dab3638ed49e5cfeba38cd2eb71184b6d163a09781_prof);

        
        $__internal_2b980edf6d149506acd9345fb610306b94227196f3da6a7b8d92c0baa94013b0->leave($__internal_2b980edf6d149506acd9345fb610306b94227196f3da6a7b8d92c0baa94013b0_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_abbf5d5970280a0214994f563c12b46278cc32d44e467f2095433a15ce478dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abbf5d5970280a0214994f563c12b46278cc32d44e467f2095433a15ce478dd8->enter($__internal_abbf5d5970280a0214994f563c12b46278cc32d44e467f2095433a15ce478dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_d7e664fb80ea6cf1f0e0a2b9528a2aaf8a667fb9c2ec06dd7180dfc508fa7c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e664fb80ea6cf1f0e0a2b9528a2aaf8a667fb9c2ec06dd7180dfc508fa7c81->enter($__internal_d7e664fb80ea6cf1f0e0a2b9528a2aaf8a667fb9c2ec06dd7180dfc508fa7c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.register", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
    <div class=\"row\">
        <div class=\"span6\">
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hwi_oauth_connect_registration", array("key" => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "attr" => array("class" => "hwi_oauth_registration_register")));
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("connect.registration.submit", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hwi_oauth_connect");
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("connect.registration.cancel", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</a>
                </div>
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        <div class=\"span6\">
            ";
        // line 16
        if ( !twig_test_empty($this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "profilePicture", array()))) {
            // line 17
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "profilePicture", array()), "html", null, true);
            echo "\" />
            ";
        }
        // line 19
        echo "        </div>
    </div>

";
        
        $__internal_d7e664fb80ea6cf1f0e0a2b9528a2aaf8a667fb9c2ec06dd7180dfc508fa7c81->leave($__internal_d7e664fb80ea6cf1f0e0a2b9528a2aaf8a667fb9c2ec06dd7180dfc508fa7c81_prof);

        
        $__internal_abbf5d5970280a0214994f563c12b46278cc32d44e467f2095433a15ce478dd8->leave($__internal_abbf5d5970280a0214994f563c12b46278cc32d44e467f2095433a15ce478dd8_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  84 => 17,  82 => 16,  76 => 13,  69 => 11,  65 => 10,  60 => 8,  56 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    <h3>{{ 'header.register' | trans({'%name%': userInformation.realName}, 'HWIOAuthBundle') }}</h3>
    <div class=\"row\">
        <div class=\"span6\">
            {{ form_start(form, {'action': path('hwi_oauth_connect_registration', {'key': key}), 'attr': {'class': 'hwi_oauth_registration_register'}}) }}
                {{ form_widget(form) }}
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">{{ 'connect.registration.submit'|trans({}, 'HWIOAuthBundle') }}</button>
                    <a href=\"{{ path('hwi_oauth_connect') }}\" class=\"btn\">{{ 'connect.registration.cancel' | trans({}, 'HWIOAuthBundle') }}</a>
                </div>
            {{ form_end(form) }}
        </div>
        <div class=\"span6\">
            {% if userInformation.profilePicture is not empty %}
                <img src=\"{{ userInformation.profilePicture }}\" />
            {% endif %}
        </div>
    </div>

{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:registration.html.twig", "C:\\Hint\\app/Resources/HWIOAuthBundle/views/Connect/registration.html.twig");
    }
}
