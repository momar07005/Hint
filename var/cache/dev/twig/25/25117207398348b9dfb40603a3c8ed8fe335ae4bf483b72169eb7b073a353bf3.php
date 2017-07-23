<?php

/* HWIOAuthBundle:Connect:connect_confirm.html.twig */
class __TwigTemplate_7f7b74539e2429ac473b5c033efbf2178d125518099dbf02d2565d58109958fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:connect_confirm.html.twig", 1);
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
        $__internal_5ca185b75e0ba53c6eab5ddb029efdd1da0edd05caa2c70c0c8f8bee2a7657b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca185b75e0ba53c6eab5ddb029efdd1da0edd05caa2c70c0c8f8bee2a7657b3->enter($__internal_5ca185b75e0ba53c6eab5ddb029efdd1da0edd05caa2c70c0c8f8bee2a7657b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_confirm.html.twig"));

        $__internal_d26e83225ddef303597e3f788c5ce84e78cfc3e44f6d4cc30dd05280d9d36b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26e83225ddef303597e3f788c5ce84e78cfc3e44f6d4cc30dd05280d9d36b66->enter($__internal_d26e83225ddef303597e3f788c5ce84e78cfc3e44f6d4cc30dd05280d9d36b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ca185b75e0ba53c6eab5ddb029efdd1da0edd05caa2c70c0c8f8bee2a7657b3->leave($__internal_5ca185b75e0ba53c6eab5ddb029efdd1da0edd05caa2c70c0c8f8bee2a7657b3_prof);

        
        $__internal_d26e83225ddef303597e3f788c5ce84e78cfc3e44f6d4cc30dd05280d9d36b66->leave($__internal_d26e83225ddef303597e3f788c5ce84e78cfc3e44f6d4cc30dd05280d9d36b66_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_1564bacb8bb50adc9430a6fe297f091980a493604713b5d88c3ac9c3dfbd49e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1564bacb8bb50adc9430a6fe297f091980a493604713b5d88c3ac9c3dfbd49e8->enter($__internal_1564bacb8bb50adc9430a6fe297f091980a493604713b5d88c3ac9c3dfbd49e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_38df2f30127d274bcab51c136c41c86b09953da72afa79f9cc4d40b1eadeb1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38df2f30127d274bcab51c136c41c86b09953da72afa79f9cc4d40b1eadeb1fb->enter($__internal_38df2f30127d274bcab51c136c41c86b09953da72afa79f9cc4d40b1eadeb1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.connecting", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
    <div class=\"row\">
        <div class=\"span6\">
            <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("connect.confirm.text", array("%service%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), array(), "HWIOAuthBundle"), "%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</p>
            <p>
                ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hwi_oauth_connect_service", array("service" => (isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "key" => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "attr" => array("class" => "fos_user_registration_register")));
        echo "
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <div>
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("connect.confirm.submit", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</button>
                        <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hwi_oauth_connect");
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("connect.confirm.cancel", array(), "HWIOAuthBundle"), "html", null, true);
        echo "</a>
                    </div>
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </p>
        </div>
        <div class=\"span6\">
            ";
        // line 19
        if (($this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : null), "profilePicture", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "profilePicture", array())))) {
            // line 20
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "profilePicture", array()), "html", null, true);
            echo "\" />
            ";
        }
        // line 22
        echo "        </div>
    </div>
";
        
        $__internal_38df2f30127d274bcab51c136c41c86b09953da72afa79f9cc4d40b1eadeb1fb->leave($__internal_38df2f30127d274bcab51c136c41c86b09953da72afa79f9cc4d40b1eadeb1fb_prof);

        
        $__internal_1564bacb8bb50adc9430a6fe297f091980a493604713b5d88c3ac9c3dfbd49e8->leave($__internal_1564bacb8bb50adc9430a6fe297f091980a493604713b5d88c3ac9c3dfbd49e8_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:connect_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  90 => 20,  88 => 19,  81 => 15,  74 => 13,  70 => 12,  65 => 10,  61 => 9,  56 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <h3>{{ 'header.connecting' | trans({}, 'HWIOAuthBundle')}}</h3>
    <div class=\"row\">
        <div class=\"span6\">
            <p>{{ 'connect.confirm.text' | trans({'%service%': service | trans({}, 'HWIOAuthBundle'), '%name%': userInformation.realName}, 'HWIOAuthBundle') }}</p>
            <p>
                {{ form_start(form, {'action': path('hwi_oauth_connect_service', {'service': service, 'key': key}), 'attr': {'class': 'fos_user_registration_register'}}) }}
                    {{ form_widget(form) }}
                    <div>
                        <button type=\"submit\" class=\"btn btn-primary\">{{ 'connect.confirm.submit' | trans({}, 'HWIOAuthBundle') }}</button>
                        <a href=\"{{ path('hwi_oauth_connect') }}\" class=\"btn\">{{ 'connect.confirm.cancel' | trans({}, 'HWIOAuthBundle') }}</a>
                    </div>
                {{ form_end(form) }}
            </p>
        </div>
        <div class=\"span6\">
            {% if userInformation.profilePicture is defined and userInformation.profilePicture is not empty %}
                <img src=\"{{ userInformation.profilePicture }}\" />
            {% endif %}
        </div>
    </div>
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:connect_confirm.html.twig", "C:\\Hint\\app/Resources/HWIOAuthBundle/views/Connect/connect_confirm.html.twig");
    }
}
