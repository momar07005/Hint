<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8cdc4b2a5a16ab9f578cd9d272045f359e710851f16641c73a5de7a81596ed32 extends Twig_Template
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
        $__internal_00fd6699c85ba427017665d233ed4589cbe4cb409d31aa7667828fd797db14b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00fd6699c85ba427017665d233ed4589cbe4cb409d31aa7667828fd797db14b0->enter($__internal_00fd6699c85ba427017665d233ed4589cbe4cb409d31aa7667828fd797db14b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d14b063af19146be0a97988a1ea54ec1be68454823f32d6cbd47e958d03caf38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14b063af19146be0a97988a1ea54ec1be68454823f32d6cbd47e958d03caf38->enter($__internal_d14b063af19146be0a97988a1ea54ec1be68454823f32d6cbd47e958d03caf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_00fd6699c85ba427017665d233ed4589cbe4cb409d31aa7667828fd797db14b0->leave($__internal_00fd6699c85ba427017665d233ed4589cbe4cb409d31aa7667828fd797db14b0_prof);

        
        $__internal_d14b063af19146be0a97988a1ea54ec1be68454823f32d6cbd47e958d03caf38->leave($__internal_d14b063af19146be0a97988a1ea54ec1be68454823f32d6cbd47e958d03caf38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
