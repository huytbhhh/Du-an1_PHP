    import mongoose from "mongoose";

    const userSchema = new mongoose.Schema(
        {
            name: String,
            email:String,
            password: String,
            role: String,
        },
    );
    export default mongoose.model("user", userSchema);
