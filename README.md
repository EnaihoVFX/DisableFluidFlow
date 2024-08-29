# DisableFluidFlow

The plugin is designed to prevent water and lava from flowing in a Minecraft server running PocketMine-MP, specifically tailored for API 5. It listens for the BlockUpdateEvent and checks if the block involved in the update is either water or lava. If it is, the event is canceled, which effectively stops the fluid from spreading. This can help in reducing lag or controlling the behavior of fluids in custom game scenarios.
