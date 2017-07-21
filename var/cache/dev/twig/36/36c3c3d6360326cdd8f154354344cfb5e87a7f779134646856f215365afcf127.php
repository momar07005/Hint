<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e62f88bc221f6fa1de7e5e187bcc6adeeefe012dc7acf37e182872062161dcbc extends Twig_Template
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
        $__internal_19425576512c9a53e5933372b300d1cac701cb3bd7193a96d90d223a91d8f212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19425576512c9a53e5933372b300d1cac701cb3bd7193a96d90d223a91d8f212->enter($__internal_19425576512c9a53e5933372b300d1cac701cb3bd7193a96d90d223a91d8f212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_205c044599628dabbf605aaa6d68c09f383405ae81ea2f6da42f80cef4ac7e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205c044599628dabbf605aaa6d68c09f383405ae81ea2f6da42f80cef4ac7e6b->enter($__internal_205c044599628dabbf605aaa6d68c09f383405ae81ea2f6da42f80cef4ac7e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_19425576512c9a53e5933372b300d1cac701cb3bd7193a96d90d223a91d8f212->leave($__internal_19425576512c9a53e5933372b300d1cac701cb3bd7193a96d90d223a91d8f212_prof);

        
        $__internal_205c044599628dabbf605aaa6d68c09f383405ae81ea2f6da42f80cef4ac7e6b->leave($__internal_205c044599628dabbf605aaa6d68c09f383405ae81ea2f6da42f80cef4ac7e6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
