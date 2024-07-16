```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Router (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Creator**

```uml
@startuml
class Router << (F,LightGreen) >> #RoyalBlue {
  # Dispenser $dispenser
  # Request $request
  # Builder $builder
  # DefaultConstructor $defaultconstructor
  # ManualConstructor $manualconstructor
  # DefaultMethods $defaultmethods
  # ManualMethods $manualmethods
  + __construct(Dispenser $dispenser, Request $request, ...)
  + getConstructor() : string
  + getConstructorAfterParent() : string
  + getMethods() : string
  - init() : void
  - updateKeys() : void
}

note right of Router::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Dispenser $dispenser
    Request $request
    Builder $builder
    DefaultConstructor $defaultconstructor
    ManualConstructor $manualconstructor
    DefaultMethods $defaultmethods
    ManualMethods $manualmethods
end note

note right of Router::getConstructor
  Get Constructor Before Parent Call

  since: 3.2.0
  return: string
end note

note right of Router::getConstructorAfterParent
  Get Constructor After Parent Call

  since: 3.2.0
  return: string
end note

note right of Router::getMethods
  Get Methods

  since: 3.2.0
  return: string
end note

note right of Router::init
  Get Constructor Before Parent Call

  since: 3.2.0
  return: void
end note

note right of Router::updateKeys
  Update the keys

  since: 3.2.0
  return: void
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---1294a7c7_46fb_4527_a69d_f8db830fd39a---Power
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

