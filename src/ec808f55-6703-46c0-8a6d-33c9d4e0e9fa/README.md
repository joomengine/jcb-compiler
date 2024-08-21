```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Extension (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Architecture\JoomlaFour\Plugin**

```uml
@startuml
class Extension << (F,LightGreen) >> #RoyalBlue {
  # Placeholder $placeholder
  # Builder $builder
  # Parser $parser
  + __construct(Placeholder $placeholder, Builder $builder, ...)
  + get(object $plugin) : string
  # addNeededMethods(string $code) : bool
  # addGetSubscribedEvents(array $methods) : ?string
  # getSubscribedEvents(array $methods) : bool
}

note right of Extension::__construct
  Constructor.

  since: 5.0.2
  
  arguments:
    Placeholder $placeholder
    Builder $builder
    Parser $parser
end note

note right of Extension::get
  Get the updated placeholder content for the given plugin.

  since: 5.0.2
  return: string
end note

note right of Extension::addNeededMethods
  Ensures that the required methods are present in the plugin code.
This method checks the plugin's code for the presence of required methods,
particularly the method that indicates implementation of the SubscriberInterface.
If the necessary method is missing, it adds it to the code.

  since: 5.0.2
  return: bool
end note

note right of Extension::addGetSubscribedEvents
  Add the getSubscribedEvents method

  since: 5.0.2
  return: ?string
end note

note right of Extension::getSubscribedEvents
  Check if the getSubscribedEvents is set

  since: 5.0.2
  return: bool
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---ec808f55_6703_46c0_8a6d_33c9d4e0e9fa---Power
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

