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
        $__internal_bf1429f5b19461b2be2d87dc4a905f9068aaca9297b6a74a02d2651b87209e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1429f5b19461b2be2d87dc4a905f9068aaca9297b6a74a02d2651b87209e3b->enter($__internal_bf1429f5b19461b2be2d87dc4a905f9068aaca9297b6a74a02d2651b87209e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_confirm.html.twig"));

        $__internal_10bf841d728d6eaa5f25d1013204a6ace775cfb4f3efad4e8c86b71768d2e55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10bf841d728d6eaa5f25d1013204a6ace775cfb4f3efad4e8c86b71768d2e55b->enter($__internal_10bf841d728d6eaa5f25d1013204a6ace775cfb4f3efad4e8c86b71768d2e55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf1429f5b19461b2be2d87dc4a905f9068aaca9297b6a74a02d2651b87209e3b->leave($__internal_bf1429f5b19461b2be2d87dc4a905f9068aaca9297b6a74a02d2651b87209e3b_prof);

        
        $__internal_10bf841d728d6eaa5f25d1013204a6ace775cfb4f3efad4e8c86b71768d2e55b->leave($__internal_10bf841d728d6eaa5f25d1013204a6ace775cfb4f3efad4e8c86b71768d2e55b_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_bba62602850cbc08df78995f8dffbce85b563c651d2b5089b17530a0f4c5e131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba62602850cbc08df78995f8dffbce85b563c651d2b5089b17530a0f4c5e131->enter($__internal_bba62602850cbc08df78995f8dffbce85b563c651d2b5089b17530a0f4c5e131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_876594e1a7061baac4871a741c1627aca4eff91db5ca3811463ae5bdad07cbf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876594e1a7061baac4871a741c1627aca4eff91db5ca3811463ae5bdad07cbf7->enter($__internal_876594e1a7061baac4871a741c1627aca4eff91db5ca3811463ae5bdad07cbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

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
        
        $__internal_876594e1a7061baac4871a741c1627aca4eff91db5ca3811463ae5bdad07cbf7->leave($__internal_876594e1a7061baac4871a741c1627aca4eff91db5ca3811463ae5bdad07cbf7_prof);

        
        $__internal_bba62602850cbc08df78995f8dffbce85b563c651d2b5089b17530a0f4c5e131->leave($__internal_bba62602850cbc08df78995f8dffbce85b563c651d2b5089b17530a0f4c5e131_prof);

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
", "HWIOAuthBundle:Connect:connect_confirm.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/HWIOAuthBundle/views/Connect/connect_confirm.html.twig");
    }
}
