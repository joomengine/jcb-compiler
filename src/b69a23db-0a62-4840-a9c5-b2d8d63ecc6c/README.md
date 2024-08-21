```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Structuremultiple (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Component**

```uml
@startuml
class Structuremultiple << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # Registry $registry
  # Settings $settings
  # Component $component
  # Createdate $createdate
  # Modifieddate $modifieddate
  # Structure $structure
  + __construct(?Config $config = null, ?Registry $registry = null, ...)
  + build() : bool
  # admin() : bool
  # site() : bool
  # custom() : bool
  - isValidAdminView(array $view, array $config) : bool
  - hasApi(array $view) : int
  - isValidView(array $view, array $config) : bool
  - buildAdminView(array $view, array $config) : void
  - buildApi(array $view, array $config, ...) : void
  - buildView(array $view, array $config, ...) : void
}

note right of Structuremultiple::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?Registry $registry = null
    ?Settings $settings = null
    ?Component $component = null
    ?Createdate $createdate = null
    ?Modifieddate $modifieddate = null
    ?Structure $structure = null
end note

note left of Structuremultiple::build
  Build the Multiple Files & Folders

  since: 3.2.0
  return: bool
end note

note right of Structuremultiple::admin
  Build the Dynamic Admin Files & Folders

  since: 3.2.0
  return: bool
end note

note left of Structuremultiple::site
  Build the Dynamic Site Files & Folders

  since: 3.2.0
  return: bool
end note

note right of Structuremultiple::custom
  Build the Dynamic Custom Admin Files & Folders

  since: 3.2.0
  return: bool
end note

note left of Structuremultiple::isValidAdminView
  Check if the view is a valid view

  since: 3.2.0
  return: bool
end note

note right of Structuremultiple::hasApi
  Check if the view has an API

  since: 5.0.2
  return: int
end note

note left of Structuremultiple::isValidView
  Check if the view is a valid view

  since: 3.2.0
  return: bool
end note

note right of Structuremultiple::buildAdminView
  Build the admin view

  since: 3.2.0
  return: void
end note

note left of Structuremultiple::buildApi
  Build the api

  since: 5.0.2
  return: void
  
  arguments:
    array $view
    array $config
    int $targetArea
end note

note right of Structuremultiple::buildView
  Build the custom view

  since: 3.2.0
  return: void
  
  arguments:
    array $view
    array $config
    string $type
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---b69a23db_0a62_4840_a9c5_b2d8d63ecc6c---Power
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

