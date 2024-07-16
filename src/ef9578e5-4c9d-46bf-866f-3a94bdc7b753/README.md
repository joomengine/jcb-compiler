```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Data (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Component**

```uml
@startuml
class Data << (F,LightGreen) >> #RoyalBlue {
  # Config $config
  # EventInterface $event
  # Placeholder $placeholder
  # ComponentPlaceholder $componentPlaceholder
  # Dispenser $dispenser
  # Customcode $customcode
  # Gui $gui
  # Field $field
  # FieldName $fieldName
  # UniqueName $uniqueName
  # Filesfolders $filesFolders
  # Historycomponent $history
  # Whmcs $whmcs
  # Sqltweaking $sqltweaking
  # Adminviews $adminviews
  # Siteviews $siteviews
  # Customadminviews $customadminviews
  # Updateserver $updateserver
  # Joomlamodules $modules
  # Joomlaplugins $plugins
  # Router $router
  # $db
  + __construct(?Config $config = null, ?EventInterface $event = null, ...)
  + get() : ?object
}

note right of Data::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    ?Config $config = null
    ?EventInterface $event = null
    ?Placeholder $placeholder = null
    ?ComponentPlaceholder $componentPlaceholder = null
    ?Dispenser $dispenser = null
    ?Customcode $customcode = null
    ?Gui $gui = null
    ?Field $field = null
    ?FieldName $fieldName = null
    ?UniqueName $uniqueName = null
    ?Filesfolders $filesFolders = null
    ?Historycomponent $history = null
    ?Whmcs $whmcs = null
    ?Sqltweaking $sqltweaking = null
    ?Adminviews $adminviews = null
    ?Siteviews $siteviews = null
    ?Customadminviews $customadminviews = null
    ?Updateserver $updateserver = null
    ?Joomlamodules $modules = null
    ?Joomlaplugins $plugins = null
    ?Router $router = null
end note

note right of Data::get
  get current component data

  since: 3.2.0
  return: ?object
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---ef9578e5_4c9d_46bf_866f_3a94bdc7b753---Power
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

