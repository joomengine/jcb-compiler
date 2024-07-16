```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Router (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Model**

```uml
@startuml
class Router  #Gold {
  # Config $config
  # Dispenser $dispenser
  # Builder $builder
  # array $guiMapper
  # array $targets
  + __construct(Config $config, Dispenser $dispenser, ...)
  + set(object $item) : void
  # getSiteViews(array $siteViews, array $adminViews) : array
  # getSiteEditViews(?array $views) : array
  # getSiteViewAliasKey(?string $viewName, array $adminViews) : ?string
  # getSiteEditViewAliasKey(?array $fields) : ?string
  # getMainSelection(?array $gets) : array
}

note right of Router::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Dispenser $dispenser
    Builder $builder
end note

note right of Router::set
  Set Router

  since: 3.2.0
  return: void
end note

note right of Router::getSiteViews
  Get the array of site views with additional details.
This method processes each site view to enrich it with additional details such as the associated table,
alias keys, and other relevant information. The enrichment is based on the view's settings and the admin views.

  since: 3.2.0
  return: array
end note

note right of Router::getSiteEditViews
  Get the array of site edit views
This method processes the provided admin views to extract and return an array of site edit views.
Each site edit view is constructed based on specific conditions from the admin view's settings.

  since: 3.2.0
  return: array
end note

note right of Router::getSiteViewAliasKey
  Get the site edit view alias key value
This method fetches the alias keys for a given site edit view by matching the view name
against a list of admin views. It processes the admin views to find a match and then
retrieves the alias keys from the matched view's settings.

  since: 3.2.0
  return: ?string
end note

note right of Router::getSiteEditViewAliasKey
  Get the site view alias key value

  since: 3.2.0
  return: ?string
end note

note right of Router::getMainSelection
  Get the view (main selection) table and view name value
from the main get object

  since: 3.2.0
  return: array
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---402239e6_ceec_4ee0_af62_22d462417bf6---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

