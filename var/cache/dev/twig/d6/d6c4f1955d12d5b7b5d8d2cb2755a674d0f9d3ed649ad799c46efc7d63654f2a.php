<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_df7a8b1888872c4f75b4c2cc3b2762d2db36a76d84961312e767a606b5587f6b extends Twig_Template
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
        $__internal_bfb27698c276fabddedc762c12714cd02d79002a924d5bd424a852fea191171f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb27698c276fabddedc762c12714cd02d79002a924d5bd424a852fea191171f->enter($__internal_bfb27698c276fabddedc762c12714cd02d79002a924d5bd424a852fea191171f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_f38a46584739e783b5837c52a93583ba16572a3d109697195452ac8c0b339aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38a46584739e783b5837c52a93583ba16572a3d109697195452ac8c0b339aa0->enter($__internal_f38a46584739e783b5837c52a93583ba16572a3d109697195452ac8c0b339aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "


<div class=\"container pt\">
    <div class=\"row\">
        <div class=\"col-sm-offset-1 col-sm-6\">
            <div class=\"box box-signin\">
                ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "                    <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 12
        echo "                <div class=\"box-content dark\">
                    <form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        ";
        // line 14
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 15
            echo "                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                        ";
        }
        // line 17
        echo "                        <div class=\"form-group\">
                            <label for=\"username\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                        </div>
                        <div class=\"form-group\">
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"remember_me\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        </div>

                        <input class=\"btn btn-success btn-send\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                    <p class=\"small\">
                        <a href=\"\">Mot de passe oublié ?</a>
                    </p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-offset-1 col-sm-4\">
            <div class=\"title title-social\">Je préfère les réseaux sociaux</div>
            <div class=\"btn btn-block btn-facebook\">
                <a class=\"facebook-hover\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl("facebook"), "html", null, true);
        echo "\"><i class=\"fa fa-facebook icon-social\"></i>Se connecter avec Facebook</a>
            </div>
            <div class=\"btn btn-block btn-google\">
                <a class=\"google-hover\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl("google"), "html", null, true);
        echo "\"><i class=\"fa fa-google icon-social\"></i>Se connecter avec Google</a>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_bfb27698c276fabddedc762c12714cd02d79002a924d5bd424a852fea191171f->leave($__internal_bfb27698c276fabddedc762c12714cd02d79002a924d5bd424a852fea191171f_prof);

        
        $__internal_f38a46584739e783b5837c52a93583ba16572a3d109697195452ac8c0b339aa0->leave($__internal_f38a46584739e783b5837c52a93583ba16572a3d109697195452ac8c0b339aa0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 44,  98 => 41,  84 => 30,  78 => 27,  70 => 22,  64 => 19,  60 => 18,  57 => 17,  51 => 15,  49 => 14,  45 => 13,  42 => 12,  36 => 10,  34 => 9,  25 => 2,);
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
        <div class=\"col-sm-offset-1 col-sm-6\">
            <div class=\"box box-signin\">
                {% if error %}
                    <div class=\"alert alert-danger alert-error\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                <div class=\"box-content dark\">
                    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                        {% if csrf_token %}
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                        {% endif %}
                        <div class=\"form-group\">
                            <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                            <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                        </div>
                        <div class=\"form-group\">
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                        </div>

                        <input class=\"btn btn-success btn-send\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                    </form>
                    <p class=\"small\">
                        <a href=\"\">Mot de passe oublié ?</a>
                    </p>
                </div>
            </div>
        </div>
        <div class=\"col-sm-offset-1 col-sm-4\">
            <div class=\"title title-social\">Je préfère les réseaux sociaux</div>
            <div class=\"btn btn-block btn-facebook\">
                <a class=\"facebook-hover\" href=\"{{ hwi_oauth_login_url('facebook') }}\"><i class=\"fa fa-facebook icon-social\"></i>Se connecter avec Facebook</a>
            </div>
            <div class=\"btn btn-block btn-google\">
                <a class=\"google-hover\" href=\"{{ hwi_oauth_login_url('google') }}\"><i class=\"fa fa-google icon-social\"></i>Se connecter avec Google</a>
            </div>
        </div>
    </div>
</div>

", "FOSUserBundle:Security:login_content.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
