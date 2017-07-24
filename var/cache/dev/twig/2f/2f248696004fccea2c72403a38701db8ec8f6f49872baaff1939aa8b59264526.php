<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_9400f4b98e03bfd249361538da0258023286ed98989e928238dcb37f0a400482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a361d81c9e63b583a646dc884f5144a8c40cc60dfb8e3272cc03f238c47340d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a361d81c9e63b583a646dc884f5144a8c40cc60dfb8e3272cc03f238c47340d->enter($__internal_6a361d81c9e63b583a646dc884f5144a8c40cc60dfb8e3272cc03f238c47340d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_43fc35cb2f7a9949eb5ddd83a15e1fb0a98f65568b9f588dd0c9a659270bb737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fc35cb2f7a9949eb5ddd83a15e1fb0a98f65568b9f588dd0c9a659270bb737->enter($__internal_43fc35cb2f7a9949eb5ddd83a15e1fb0a98f65568b9f588dd0c9a659270bb737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<div class=\"container pt\">
    <div class=\"row\">
\t\t<div class=\"col-sm-8\">
\t\t     <div class=\"box box-signin\">
\t\t     \t<div class=\"box-content dark\">
\t\t\t\t\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t\t\t    \t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label_attr" => array("class" => "control-label "), "label" => "Prenom"));
        echo "
\t\t\t\t\t\t        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["errorItem"]) {
            // line 13
            echo "\t\t\t\t\t\t        <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["errorItem"], "message", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t\t\t    \t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "control-label "), "label" => "Nom"));
        echo "
\t\t\t\t\t\t        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["errorItem"]) {
            // line 20
            echo "\t\t\t\t\t\t        <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["errorItem"], "message", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t\t\t    \t";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "control-label "), "label" => "Nom d'utilisateur"));
        echo "
\t\t\t\t\t\t        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["errorItem"]) {
            // line 29
            echo "\t\t\t\t\t\t        <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["errorItem"], "message", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t\t\t    \t";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "
\t\t\t\t\t\t        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["errorItem"]) {
            // line 36
            echo "\t\t\t\t\t\t        <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["errorItem"], "message", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t\t\t    \t";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'label', array("label_attr" => array("class" => "control-label "), "label" => "Mot de passe"));
        echo "
\t\t\t\t\t\t        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["errorItem"]) {
            // line 45
            echo "\t\t\t\t\t\t        <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["errorItem"], "message", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t\t\t    \t";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "control-label "), "label" => "Répéter mot de passe"));
        echo "
\t\t\t\t\t\t        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["errorItem"]) {
            // line 52
            echo "\t\t\t\t\t\t        <span style=\"color: red;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["errorItem"], "message", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"margin-send-register\">
\t\t\t\t\t\t    <input class=\"btn btn-success btn-send\" type=\"submit\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t";
        // line 60
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-sm-4\">
            <div class=\"title title-social\">Pourquoi s'inscrire ?</div>
            <p class=\"text-register-page\">
            \tDevenir membre sur <strong>my-hint</strong>, c'est accéder au forum et aux discussions en ligne pour apprendre et s'améliorer dans les matières qui vous intéresse.<br>
\t\t\t\tLa création d'un compte est totalement <strong>gratuite</strong>. Vous pourrez ensuite choisir de devenir <strong>premium</strong> pour accéder et télécharger les videos des cours.
            </p>
            <div class=\"btn btn-block btn-facebook\">
                <a class=\"facebook-hover\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl("facebook"), "html", null, true);
        echo "\"><i class=\"fa fa-facebook icon-social\"></i>S'inscrire avec Facebook</a>
            </div>
            <div class=\"btn btn-block btn-google\">
                <a class=\"google-hover\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl("google"), "html", null, true);
        echo "\"><i class=\"fa fa-google icon-social\"></i>S'inscrire avec Google</a>
            </div>
        </div>
\t</div>
</div>\t";
        
        $__internal_6a361d81c9e63b583a646dc884f5144a8c40cc60dfb8e3272cc03f238c47340d->leave($__internal_6a361d81c9e63b583a646dc884f5144a8c40cc60dfb8e3272cc03f238c47340d_prof);

        
        $__internal_43fc35cb2f7a9949eb5ddd83a15e1fb0a98f65568b9f588dd0c9a659270bb737->leave($__internal_43fc35cb2f7a9949eb5ddd83a15e1fb0a98f65568b9f588dd0c9a659270bb737_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 74,  216 => 71,  202 => 60,  198 => 59,  193 => 57,  188 => 54,  179 => 52,  175 => 51,  171 => 50,  167 => 49,  163 => 47,  154 => 45,  150 => 44,  146 => 43,  142 => 42,  136 => 38,  127 => 36,  123 => 35,  119 => 34,  115 => 33,  111 => 31,  102 => 29,  98 => 28,  94 => 27,  90 => 26,  84 => 22,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 15,  50 => 13,  46 => 12,  42 => 11,  38 => 10,  32 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"container pt\">
    <div class=\"row\">
\t\t<div class=\"col-sm-8\">
\t\t     <div class=\"box box-signin\">
\t\t     \t<div class=\"box-content dark\">
\t\t\t\t\t{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"form-group col-sm-6\">
\t\t\t\t\t\t    \t{{ form_label(form.prenom, \"Prenom\", {'label_attr': {'class': 'control-label '}}) }}
\t\t\t\t\t\t        {{ form_widget(form.prenom, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t        {% for errorItem in form.prenom.vars.errors %}
\t\t\t\t\t\t        <span style=\"color: red;\">{{ errorItem.message }}</span>
\t\t\t\t\t\t        {% endfor %}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t\t\t    \t{{ form_label(form.nom, \"Nom\", {'label_attr': {'class': 'control-label '}}) }}
\t\t\t\t\t\t        {{ form_widget(form.nom, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t        {% for errorItem in form.nom.vars.errors %}
\t\t\t\t\t\t        <span style=\"color: red;\">{{ errorItem.message }}</span>
\t\t\t\t\t\t        {% endfor %}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t\t\t    \t{{ form_label(form.username, \"Nom d'utilisateur\", {'label_attr': {'class': 'control-label '}}) }}
\t\t\t\t\t\t        {{ form_widget(form.username, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t        {% for errorItem in form.username.vars.errors %}
\t\t\t\t\t\t        <span style=\"color: red;\">{{ errorItem.message }}</span>
\t\t\t\t\t\t        {% endfor %}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t\t\t    \t{{ form_label(form.email, \"Email\", {'label_attr': {'class': 'control-label'}}) }}
\t\t\t\t\t\t        {{ form_widget(form.email, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t        {% for errorItem in form.email.vars.errors %}
\t\t\t\t\t\t        <span style=\"color: red;\">{{ errorItem.message }}</span>
\t\t\t\t\t\t        {% endfor %}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t\t\t    \t{{ form_label(form.plainPassword, \"Mot de passe\", {'label_attr': {'class': 'control-label '}}) }}
\t\t\t\t\t\t        {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t        {% for errorItem in form.plainPassword.first.vars.errors %}
\t\t\t\t\t\t        <span style=\"color: red;\">{{ errorItem.message }}</span>
\t\t\t\t\t\t        {% endfor %}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"form-group col-sm-6\">
\t\t\t\t\t\t    \t{{ form_label(form.plainPassword.second, \"Répéter mot de passe\", {'label_attr': {'class': 'control-label '}}) }}
\t\t\t\t\t\t        {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t        {% for errorItem in form.plainPassword.second.vars.errors %}
\t\t\t\t\t\t        <span style=\"color: red;\">{{ errorItem.message }}</span>
\t\t\t\t\t\t        {% endfor %}
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"margin-send-register\">
\t\t\t\t\t\t    <input class=\"btn btn-success btn-send\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t    {{ form_rest(form) }}
\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-sm-4\">
            <div class=\"title title-social\">Pourquoi s'inscrire ?</div>
            <p class=\"text-register-page\">
            \tDevenir membre sur <strong>my-hint</strong>, c'est accéder au forum et aux discussions en ligne pour apprendre et s'améliorer dans les matières qui vous intéresse.<br>
\t\t\t\tLa création d'un compte est totalement <strong>gratuite</strong>. Vous pourrez ensuite choisir de devenir <strong>premium</strong> pour accéder et télécharger les videos des cours.
            </p>
            <div class=\"btn btn-block btn-facebook\">
                <a class=\"facebook-hover\" href=\"{{ hwi_oauth_login_url('facebook') }}\"><i class=\"fa fa-facebook icon-social\"></i>S'inscrire avec Facebook</a>
            </div>
            <div class=\"btn btn-block btn-google\">
                <a class=\"google-hover\" href=\"{{ hwi_oauth_login_url('google') }}\"><i class=\"fa fa-google icon-social\"></i>S'inscrire avec Google</a>
            </div>
        </div>
\t</div>
</div>\t", "FOSUserBundle:Registration:register_content.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
