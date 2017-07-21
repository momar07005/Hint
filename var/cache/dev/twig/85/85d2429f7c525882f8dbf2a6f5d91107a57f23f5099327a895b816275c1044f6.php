<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6fb9997f97eaaaff7499c141c6eff38c9bb4758e148e9182a88e58534df6a143 extends Twig_Template
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
        $__internal_a3add98784dea233d0472224c5a89f9f17950465b05372a4ca7d6c591a216e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3add98784dea233d0472224c5a89f9f17950465b05372a4ca7d6c591a216e64->enter($__internal_a3add98784dea233d0472224c5a89f9f17950465b05372a4ca7d6c591a216e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7a1956813ee494f2fb8f1c9d6e4fd16c222076cc446d4bf72243204caf3a5524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1956813ee494f2fb8f1c9d6e4fd16c222076cc446d4bf72243204caf3a5524->enter($__internal_7a1956813ee494f2fb8f1c9d6e4fd16c222076cc446d4bf72243204caf3a5524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a3add98784dea233d0472224c5a89f9f17950465b05372a4ca7d6c591a216e64->leave($__internal_a3add98784dea233d0472224c5a89f9f17950465b05372a4ca7d6c591a216e64_prof);

        
        $__internal_7a1956813ee494f2fb8f1c9d6e4fd16c222076cc446d4bf72243204caf3a5524->leave($__internal_7a1956813ee494f2fb8f1c9d6e4fd16c222076cc446d4bf72243204caf3a5524_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
